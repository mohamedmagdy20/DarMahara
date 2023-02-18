<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Message;
use App\Article;
use App\Service;
use App\User;
class HomeController extends Controller
{
    //
    public function index()
    {
        $message = Message::count();
        $service = Service::count();
        $user = User::count();
        $article = Article::count();
        return view('dashboard.index',compact('message','service','user','article'));
    }
}
