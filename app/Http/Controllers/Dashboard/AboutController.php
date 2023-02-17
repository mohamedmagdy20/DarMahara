<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\About;
class AboutController extends Controller
{
    //
    public function index()
    {
        $abouts = About::all();
        return view('dashboard.about.index',compact('abouts'));
    }

    public function edit($id)
    {
        $about = About::findOrFail($id);
        return view('dashboard.about.edit',compact('about'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'body'=>'required',
            'keywords'=>'required',
        ]);

        $about = About::findOrFail($request->id);

        if( $about->update($request->all()))
        {
            return redirect()->back()->with('success','تم التعديل بنجاح');
        }else{
            return redirect()->back()->with('error','Error');
        }
    }
}
