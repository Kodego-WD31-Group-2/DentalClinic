<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use Illuminate\Http\Request;

class ChatsController extends Controller
{
    /**
     * Display the home page.
     *
     * @return \Illuminate\Http\Response
     */
    public function chat()
    {
        $chats = Chat::all();
        return view('pages.chat', compact('chats'));
    }

    
}
