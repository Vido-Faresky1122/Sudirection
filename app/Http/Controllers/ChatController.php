<?php

namespace App\Http\Controllers;

use App\Ai\Agents\DirectionAgent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Throwable;

class ChatController extends Controller
{
    public function index()
    {
        return view('chat');
    }

    public function sendMessage(Request $request)
    {
        $request->validate([
            'message' => 'required|string',
        ]);

        try {
            $response = retry(3, function () use ($request) {
                $agent = new DirectionAgent();
                return $agent->prompt($request->message);
            }, 1000);

            return response()->json([
                'status' => 'success',
                'response' => (string) $response,
            ]);

        } catch (Throwable $e) {
            Log::error('Gemini Error: ' . $e->getMessage());

            return response()->json([
                'status' => 'error',
                'message' => 'Gemini sedang sibuk. Silakan coba lagi beberapa saat.',
            ], 503);
        }
    }
}