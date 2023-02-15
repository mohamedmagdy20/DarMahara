<?php

namespace App\Http\Controllers;

use App\Article;
use App\Message;
use App\Service;
use Illuminate\Http\Request;

class Home extends Controller
{
    public function index(){
        $services = Service::all();
        $articles = Article::all();
        return view('pages.index' , compact('services', 'articles'));
    }

    public function addMessage(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'phone'=>'required'
        ],[
            'name.required'=>'يجب ادخال الإسم (حقل مطلوب)',
            'phone.required'=>'يجب ادخال الهاتف (حقل مطلوب)'
        ]);
        Message::insert([
            'full_name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'service' => $request->service,
        ]);
        return Redirect()->back()->with('success','تم إرسال الطلب بنجاح ، سنقوم بمراجعة الطلب والتواصل معكم فى أقرب وقت');
    }
}
