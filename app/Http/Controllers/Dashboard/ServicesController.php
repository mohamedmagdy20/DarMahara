<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Service;
use App\Traits\CanUploadImage;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    use CanUploadImage;

    public function index() {
        $services = Service::all();

        return view('services/show', compact('services'));
    }

    public function add() {
        return view('services/create');
    }

    public function store(Request $request) 
    {
        $request->validate([
            'name' => "Required|string",
            'description' => "Required|string",
            'short_description' => "Required|string",
            'image_alt' => "Required|string",
            'meta_title' => "Required|string",
            'meta_description' => "Required|string",
            'keywords' => "Required|string",
            'url' => "Required|string",
        ]);

        // Upload Image if Exists
        if ($request->hasFile('image')) {
            $filePath = $this->uploadImage($request, 'image', public_path('../assets/uploads/services'));
        }

        $url = str_replace([' ', '_'], "-", $request->url);

        Service::create([
            'name' => $request->name,
            'description' => $request->description,
            'short_description' => $request->short_description,
            'image_alt' => $request->image_alt,
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
            'keywords' => $request->keywords,
            'url' => $url,
        ] + ["image"  =>  $filePath ?? ""]);

        return redirect(route('admin.services.show'));
    }

    public function edit($service_id) {
        $service = Service::findOrFail($service_id);

        return view('services/edit', compact('service'));
    }
    public function update(Request $request) {
        $request->validate([
            'name' => "Required|exists:services,id",
            'name' => "Required|string",
            'description' => "Required|string",
            'short_description' => "Required|string",
            'image_alt' => "Required|string",
            'meta_title' => "Required|string",
            'meta_description' => "Required|string",
            'keywords' => "Required|string",
            'url' => "Required|string",
        ]);

        $service = Service::findOrFail($request->id);

        // Upload Image if Exists
        if ($request->hasFile('image')) {
            $filePath = $this->uploadImage($request, 'image', public_path('../assets/uploads/services'));
        }

        $url = str_replace([' ', '_'], "-", $request->url);

        $service->update([
            'name' => $request->name,
            'description' => $request->description,
            'short_description' => $request->short_description,
            'image_alt' => $request->image_alt,
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
            'keywords' => $request->keywords,
            'url' => $url,
            ] + ["image"  =>  $filePath ?? $service->image]
        );

        return redirect(route('admin.services.show'));
    }


    public function delete($service_id) {
        $service = Service::findOrFail($service_id);
        $service->delete();

        return redirect(route('admin.services.show'));
    }

}
