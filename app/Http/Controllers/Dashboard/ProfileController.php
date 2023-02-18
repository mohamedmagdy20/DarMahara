<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
class ProfileController extends Controller
{
    //
    public function index()
    {
        return view('dashboard.user.index');   
    }

    public function edit()
    {
        return view('dashboard.user.edit');   
    }

    public function update(Request $request )
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required|email'
        ]);
        $user = User::find(auth()->user()->id);
        if($request->password != null)
        {
            // change password //
            if($request->password == $request->re_password)
            {
                $data = array_merge($request->all(),['password'=>Hash::make($request->password)]);
                if( $user->update($data)){
                    return redirect()->route('admin.profile.index')->with('success','تم التعديل بنجاح');
                }else{
                    return redirect()->route('admin.profile.edit')->with('error','Error');
                }   
            }else{
                return redirect()->route('admin.profile.edit')->with('error','Password Not Same');
            }
        }else{
            if( $user->update(['email'=>$request->email,'name'=>$request->name])){
                return redirect()->route('admin.profile.index')->with('success','تم التعديل بنجاح');
            }
            else
            {
                return redirect()->route('admin.profile.edit')->with('error','Error');
            }      
        }
    }
}