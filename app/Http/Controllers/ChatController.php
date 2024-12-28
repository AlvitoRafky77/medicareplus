<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function dashboardChat()
    {
        return view ('live-chat.dashboard');
    }

    public function index()
    {
        // Dapatkan pesan dari database (contoh data statis sementara)
        $messages = [
            ['type' => 'received', 'content' => 'Halo, ada yang bisa saya bantu?'],
            ['type' => 'sent', 'content' => 'Ya, saya punya pertanyaan tentang konsultasi.']
        ];

        return view('live-chat.index', compact('messages'));
    }

    public function send(Request $request)
    {
        $validated = $request->validate([
            'message' => 'required|string|max:500',
        ]);

        // Simpan pesan ke database (sementara dikembalikan langsung)
        return response()->json([
            'type' => 'sent',
            'content' => $validated['message']
        ]);
    }
}
