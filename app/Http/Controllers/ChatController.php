<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
    public function dashboardChat()
    {
        return view('live-chat.dashboard');
    }

    public function index()
    {
        // Ambil pesan dari database, urutkan berdasarkan waktu
        $messages = Message::orderBy('created_at', 'asc')->get();

        return view('live-chat.index', compact('messages'));
    }

    public function send(Request $request)
    {
        $validated = $request->validate([
            'message' => 'required|string|max:500',
        ]);

        // Simpan pesan ke database
        $message = Message::create([
            'user_id' => Auth::id(), // ID pengguna yang login
            'content' => $validated['message'],
            'type' => 'sent',
        ]);

        return response()->json([
            'type' => $message->type,
            'content' => $message->content,
        ]);
    }
}
