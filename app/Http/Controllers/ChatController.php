<?php

namespace App\Http\Controllers;

use App\Models\Sender;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
    public function index()
    {
//        $senderId = Auth::id();
        $senderId = 7;
        $sender = Sender::findOrFail($senderId);
        $pageConfigs = [
            'pageHeader' => false,
            'contentLayout' => "content-left-sidebar",
            'pageClass' => 'chat-application',
        ];
        // Receivers sorted by time
        $receivers = $sender->messages()
            ->orderBy('time', 'DESC')
            ->with('receiver')
            ->get()
            ->pluck('receiver')
            ->unique('id');
        return view('chat', compact('receivers', 'pageConfigs'));
    }
}
