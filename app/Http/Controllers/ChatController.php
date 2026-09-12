<?php

namespace App\Http\Controllers;

use App\Ai\Agents\DirectionAgent;
use Illuminate\Http\Client\RequestException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;
use Laravel\Ai\Exceptions\ProviderConnectionException;
use Laravel\Ai\Exceptions\ProviderOverloadedException;
use Laravel\Ai\Exceptions\RateLimitedException;
use Throwable;

class ChatController extends Controller
{
    public function index()
    {
        $title = 'SudirectionAI - Sudirection';

        return view('chat', [
            'title' => $title
        ]);
    }

    public function sendMessage(Request $request)
    {
        $request->validate([
            'message' => 'required|string|max:2000',
        ]);

        // Cache disimpan di file store agar tidak bergantung pada database
        // (chat tetap jalan walau MySQL mati) dan jauh lebih cepat.
        $cache = Cache::store('file');

        // Throttle: maksimal 1 kirim per ~5 detik per IP agar tidak cepat
        // menembus RPM yang sangat kecil di free tier OpenAI.
        $throttleKey = 'chat.throttle.'.str_replace(':', '.', $request->ip() ?? 'unknown');
        $lastSent = $cache->get($throttleKey);

        if ($lastSent !== null && microtime(true) - (float) $lastSent < 5) {
            return response()->json([
                'status' => 'error',
                'message' => 'Kirim terlalu cepat. Tunggu sebentar sebelum mengirim lagi.',
            ], 429);
        }

        $cache->put($throttleKey, (string) microtime(true), now()->addMinutes(5));

        try {
            // Satu panggilan langsung ke provider (tanpa retry) agar respons cepat.
            // Cache 24 jam per pertanyaan unik menghindari request berulang ke API.
            $response = $cache->remember('chat:'.md5($request->message), 86400, function () use ($request) {
                return (string) (new DirectionAgent)->prompt($request->message);
            });

            $text = trim((string) $response);

            // Cegah "AI: undefined" / response kosong.
            if ($text === '') {
                $text = 'Maaf, saya tidak dapat menemukan jawaban yang sesuai. Silakan coba lagi dengan pertanyaan yang lebih jelas.';
            }

            return response()->json([
                'status' => 'success',
                'response' => $text,
            ]);
            

        } catch (ProviderOverloadedException $e) {
            Log::warning('Gemini overloaded: '.$e->getMessage());

            return response()->json([
                'status' => 'error',
                'message' => 'Layanan AI sedang sibuk. Silakan coba lagi beberapa saat.',
            ], 503);

        } catch (RateLimitedException $e) {
            $errorCode = $this->openAiErrorCode($e);
            $errorMessage = $this->openAiErrorMessage($e);
            $retryAfter = $this->openAiRetryAfter($e);

            Log::warning('Gemini rate limited', [
                'code' => $errorCode,
                'message' => $errorMessage,
                'retry_after' => $retryAfter,
                'original' => $e->getMessage(),
            ]);

            if ($errorCode === 'insufficient_quota') {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Kuota layanan AI Anda habis. Periksa kuota/billing di penyedia layanan.',
                ], 429);
            }

            $hint = $retryAfter !== null && $retryAfter > 0
                ? ' Coba lagi dalam sekitar '.$retryAfter.' detik.'
                : ' Silakan tunggu beberapa saat lalu coba lagi.';

            return response()->json([
                'status' => 'error',
                'message' => 'Layanan AI sedang sibuk atau menerima terlalu banyak permintaan.'.$hint,
            ], 429);

        } catch (ProviderConnectionException $e) {
            Log::warning('Gemini connection error: '.$e->getMessage());

            return response()->json([
                'status' => 'error',
                'message' => 'Gagal terhubung ke layanan AI. Periksa koneksi Anda lalu coba lagi.',
            ], 503);

        } catch (RequestException $e) {
            $status = $e->response?->status();
            $code = $e->response?->json('error.code');

            Log::warning('Gemini request error ('.$status.'): '.$e->getMessage());

            if ($status === 401 || $code === 'invalid_api_key') {
                return response()->json([
                    'status' => 'error',
                    'message' => 'API key Gemini tidak valid. Periksa GEMINI_API_KEY di file .env.',
                ], 401);
            }

            if ($status === 404) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Model Gemini tidak tersedia untuk akun ini. Hubungi administrator.',
                ], 404);
            }

            if ($status === 400) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Permintaan tidak dapat diproses oleh model AI. Coba tulis ulang pertanyaan Anda.',
                ], 422);
            }

            return response()->json([
                'status' => 'error',
                'message' => 'Layanan AI gagal merespons. Silakan coba lagi nanti.',
            ], 502);

        } catch (Throwable $e) {
            Log::error('Gemini Error: '.$e->getMessage());

            return response()->json([
                'status' => 'error',
                'message' => 'Terjadi kesalahan saat memproses pesan Anda. Silakan coba lagi.',
            ], 500);
        } 
    }

    /**
     * Ambil kode error OpenAI dari response HTTP asli (mis. "insufficient_quota").
     */
    private function openAiErrorCode(Throwable $e): ?string
    {
        $previous = $e->getPrevious();

        if ($previous instanceof RequestException && $previous->response !== null) {
            return $previous->response->json('error.code');
        }

        return null;
    }

    /**
     * Ambil pesan error asli dari OpenAI (mis. "You exceeded your current quota...").
     */
    private function openAiErrorMessage(Throwable $e): ?string
    {
        $previous = $e->getPrevious();

        if ($previous instanceof RequestException && $previous->response !== null) {
            return $previous->response->json('error.message');
        }

        return null;
    }

    /**
     * Ambil header Retry-After (detik) dari response asli OpenAI, bila tersedia.
     */
    private function openAiRetryAfter(Throwable $e): ?int
    {
        $previous = $e->getPrevious();

        if ($previous instanceof RequestException && $previous->response !== null) {
            $retryAfter = $previous->response->header('Retry-After');

            if ($retryAfter !== null && is_numeric($retryAfter)) {
                return (int) $retryAfter;
            }
        }

        return null;
    }
}