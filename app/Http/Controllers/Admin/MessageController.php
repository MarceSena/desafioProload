<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function newMessage(Request $request)
    {
        $messageCreate = factory(\App\Models\Message::class)->create();
        
        $request->user()->notify(new SendMessage($message));

        return (redirect()->route('home')->with('status', 'Message Send!'));
    }
}
