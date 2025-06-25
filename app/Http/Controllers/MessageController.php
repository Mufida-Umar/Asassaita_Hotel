<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    // Store a new contact message
    public function send(Request $request)
    {
        $validated = $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname'  => 'required|string|max:255',
            'phone'     => 'required|string|max:20',
            'email'     => 'required|email|max:255',
            'message'   => 'required|string',
        ]);

        Message::create($validated);

        return redirect()->back()->with('success', 'Message sent!');
    }

    // Show all messages in the admin panel
    public function index()
    {
        $messages = Message::latest()->get();
        return view('admin.components.Message', compact('messages'));
    }
}