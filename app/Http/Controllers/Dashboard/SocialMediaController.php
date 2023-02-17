<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\SocialMedia;
use App\Traits\CanUploadImage;
use Illuminate\Support\Str;

class SocialMediaController extends Controller
{
    //
    use CanUploadImage;

    public function index()
    {
        $social = SocialMedia::all();
        return view('dashboard.socialmedia.index',compact('social'));
    }

    public function create()
    {
        return view('dashboard.socialmedia.create');   
    }

    public function store(Request $request)
    {
        $request->validate([
            'link'=>'required',
            'image'=>'image|required',
            'image_alt'=>'required'
        ]);

        if($request->hasfile('image'))
        {
            //store image 
            $image = $request->file('image');
            $name = Str::slug($request->input('image_alt')).'_'.time();
            $folder = 'assets/images/icons/';
            $filePath = $name. '.' . $image->getClientOriginalExtension();
            $this->uploadOne($image, $folder, 'public', $name);
        }

        $data = array_merge($request->all(),['image'=>$filePath]);
        if(SocialMedia::create($data))
        {
            return redirect()->route('admin.social.index')->with('success','Created Successfuly');
        }else{
            return  redirect()->back()->with('error','Error');
        }
    }


    public function edit($id)
    {
        $social = SocialMedia::findOrFail($id);
        return view('dashboard.socialmedia.edit',compact('social'));
    }

    public function update()
    {
        $request->validate([
            'link'=>'required',
            'image'=>'image|required',
            'image_alt'=>'required'
        ]);
        $social = SocialMedia::findOrFail($request->id);

        if ($request->hasFile('image')) {
            //delete Image First 
            $oldImagePath = public_path().'/assets/images/icons/'. $social->image;
            unlink($oldImagePath);

            $image = $request->file('image');
            $name = Str::slug($request->input('image_alt')).'_'.time();
            $folder = 'assets/images/icons/';
            $filePath = $name. '.' . $image->getClientOriginalExtension();
            $this->uploadOne($image, $folder, 'public', $name);
        }


        $data = array_merge($request->all(),['image'=>$filePath]);

        if($social->update($data))
        {
            return redirect()->route('admin.social.index')->with('success','تم التعديل نحجاح');
        }else{
            return redirect()->back()->with('error','Error');
        }
    }

    public function delete($id)
    {
        $social = SocialMedia::findOrFail($id);
        //delete Image First 
        $oldImagePath = public_path().'/assets/images/icons/'. $social->image;
        unlink($oldImagePath);
        $social->delete();
        return  redirect()->back()->with('success','تم الحذف بنجاح');

    }
}
