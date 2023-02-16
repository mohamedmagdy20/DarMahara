<?php

namespace App\Traits;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Str;
use Spatie\LaravelImageOptimizer\Facades\ImageOptimizer;
use Illuminate\Support\Facades\Storage;

trait CanUploadImage
{


    public function uploadOne(UploadedFile $uploadedFile, $folder = null, $disk = 'public', $filename = null)
    {
        $name = !is_null($filename) ? $filename : Str::random(25);

        $file = $uploadedFile->storeAs($folder, $name.'.'.$uploadedFile->getClientOriginalExtension(), $disk);

        return $file;
    }
    // /**
    //  * Upload an image to the server.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  string  $field
    //  * @param  string  $path
    //  * @return string|null
    //  */
    // public function uploadImage(Request $request, string $field, string $path): ?string
    // {
    //     if (! $request->hasFile($field)) {
    //         return null;
    //     }

    //     $file = $request->file($field);
    //     if (! $file instanceof UploadedFile) {
    //         return null;
    //     }

    //     $filename = Str::random(32).'.'.$file->getClientOriginalExtension();
    //     $file->move($path, $filename);

    //     return $filename;
    // }

    // /**
    //  * Upload Optimized Image.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  string  $field
    //  * @param  string  $path
    //  * @return string|null
    //  */
    // public function uploadOptimizedImage(Request $request, string $field, string $path): ?string
    // {
    //     $path = $this->uploadImage($request, $field, $path);
    //     ImageOptimizer::optimize($path);

    //     return $path;
    // }
}
