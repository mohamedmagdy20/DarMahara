<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Discounts;
class DiscountController extends Controller
{
    //
    public function index()
    {
        $discount = Discounts::all();
        return view('dashboard.discount.index',compact('discount'));
    }

    public function edit($id)
    {
        $discount = Discounts::find($id);
        return view('dashboard.discount.edit',compact('discount'));
    }

    public function update(Request $request)
    {
        $discount = Discounts::find($request->id);
        $discount->update([
            'body'=>$request->body
        ]);
        return  redirect()->back()->with('success','تم التحديث بنجاح');
    }

}
