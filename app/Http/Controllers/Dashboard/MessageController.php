<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Message;
class MessageController extends Controller
{
    public function index()
    {
        $messages = Message::latest()->get();
        return view('dashboard.messages.index',compact('messages'));
    }
}
