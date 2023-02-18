<?php

namespace App\Http\Controllers\Dashboard;

use App\Article;
use App\Http\Controllers\Controller;
use App\Traits\CanUploadImage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class ArticlesController extends Controller
{
    use CanUploadImage;

    public function index()
    {
        $articles = Article::all();

        return view('articles/show', compact('articles'));
    }

    public function add()
    {
        return view('articles/create');
    }

    public function store(Request $request)
    {
    // return $request->all();
        $request->validate([
            'name' => "Required|string",
            'description' => "Required|string",
            'short_description' => "Required|string",
            'image_alt' => "Required|string",
            'meta_title' => "Required|string",
            'meta_description' => "Required|string",
            'keywords' => "Required|string",
            'url' => "Required|string",
            'image'=>'image'
        ]);

        // Upload Image if Exists
        if ($request->hasfile('image')) {
            // return "1235";
            $image = $request->file('image');
            $name = Str::slug($request->input('name')).'_'.time();
            $folder = 'uploads/articles/';
            $filePath = $name. '.' . $image->getClientOriginalExtension();
            $this->uploadOne($image, $folder, 'public', $name);
        }



        $url = str_replace([' ', '_'], "-", $request->url);

        Article::create([
            'name' => $request->name,
            'description' => $request->description,
            'short_description' => $request->short_description,
            'image_alt' => $request->image_alt,
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
            'keywords' => $request->keywords,
            'url' => $url,
        ] + ["image"  =>  $filePath ?? ""]);

        return redirect(route('admin.articles.show'))->with('success','تم اضافة المقال');
        // redirect()->back()->with('success','تم اضافة المقال');
    }

    public function edit($article_id)
    {
        $article = Article::findOrFail($article_id);

        return view('articles/edit', compact('article'));
    }
    public function update(Request $request)
    {
        $request->validate([
            'name' => "Required|exists:articles,id",
            'name' => "Required|string",
            'description' => "Required|string",
            'short_description' => "Required|string",
            'image_alt' => "Required|string",
            'meta_title' => "Required|string",
            'meta_description' => "Required|string",
            'keywords' => "Required|string",
            'url' => "Required|string",
            'image'=>'image'
        ]);

        $article = Article::findOrFail($request->id);

        // Upload Image if Exists

        
        if ($request->hasFile('image')) {
            //delete Image First 
            $oldImagePath = public_path().'/uploads/articles/'. $article->image;
            unlink($oldImagePath);

            $image = $request->file('image');
            $name = Str::slug($request->input('name')).'_'.time();
            $folder = 'uploads/articles/';
            $filePath = $name. '.' . $image->getClientOriginalExtension();
            $this->uploadOne($image, $folder, 'public', $name);
        }

        $url = str_replace([' ', '_'], "-", $request->url);

        $article->update(
            [
                'name' => $request->name,
                'description' => $request->description,
                'short_description' => $request->short_description,
                'image_alt' => $request->image_alt,
                'meta_title' => $request->meta_title,
                'meta_description' => $request->meta_description,
                'keywords' => $request->keywords,
                'url' => $url,
            ] + ["image"  =>  $filePath ?? $article->image]
        );

        // return redirect();
        return redirect()->route('admin.articles.show')->with('success','تم التعديل بنجاح');
    }


    public function delete($article_id)
    {

        $article = article::findOrFail($article_id);
        $oldImagePath = public_path().'/uploads/articles/'. $article->image;
        // return $oldImagePath;
        unlink($oldImagePath);
        $article->delete();

        return redirect()->route('admin.articles.show')->with('success','تم الحذف بنجاح');
    }

}
