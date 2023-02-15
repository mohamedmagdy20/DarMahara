<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;

class Services extends Controller
{
    public function index(){
        $services = Service::all();
        return view('pages.services' , compact('services'));
    }

    public  function getServiceDetails($url){
        $services = Service::where('url','!=',$url)->get();
        $service = Service::where('url',$url)->first();
        return view('pages.service' , compact('services','service'));
    }
}
