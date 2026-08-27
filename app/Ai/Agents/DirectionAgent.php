<?php

namespace App\Ai\Agents;

use Laravel\Ai\Contracts\Agent;
use Laravel\Ai\Contracts\Conversational;
use Laravel\Ai\Contracts\HasTools;
use Laravel\Ai\Contracts\Tool;
use Laravel\Ai\Messages\Message;
use Laravel\Ai\Promptable;
use Stringable;

class DirectionAgent implements Agent, Conversational, HasTools
{
    use Promptable;

    /**
     * Provider spesifik yang digunakan
     */
    protected string $provider = 'gemini';

    /**
     * Model Gemini yang digunakan
     */
    protected string $model = 'gemini-3.7-flash';

    /**
     * Get the instructions that the agent should follow.
     */
    public function instructions(): Stringable|string
    {
        return 'Anda adalah Sudirection AI, asisten navigasi dan lokasi. 
        
        SANGAT PENTING:
        1. Jika pengguna meminta rekomendasi tempat (seperti kafe, restoran, rumah sakit, tempat wisata, dll), Anda HARUS mengembalikan jawaban HANYA dalam format JSON tunggal (tanpa teks ekstra) dengan skema berikut:
        {
          "type": "location_card",
          "text": "Pesan pengantar singkat untuk pengguna",
          "name": "Nama Tempat",
          "category": "Kategori (misal: Cafe, Restaurant, Hospital)",
          "rating": "4.8",
          "reviews": "1,240",
          "distance": "0.6 km away",
          "status": "Open Now",
          "hours": "06:00 AM - 10:00 PM",
          "image": "https://images.unsplash.com/photo-1554118811-1e0d58224f24",
          "maps_url": "https://www.google.com/maps"
        }

        2. Jika tempat tidak ditemukan atau lokasi tidak jelas, kembalikan JSON error berikut:
        {
          "type": "error_card",
          "message": "Maaf, lokasi tidak ditemukan. Silakan perjelas pencarian Anda.",
          "last_query": "kata kunci pencarian"
        }

        3. Jika pertanyaan berupa percakapan umum biasa (bukan rekomendasi tempat), jawablah seperti biasa menggunakan teks biasa yang ramah, sopan, dan profesional.';
    }

    /**
     * Get the list of messages comprising the conversation so far.
     *
     * @return Message[]
     */
    public function messages(): iterable
    {
        return [];
    }

    /**
     * Get the tools available to the agent.
     */
    public function tools(): array
    {
        return [];
    }
}