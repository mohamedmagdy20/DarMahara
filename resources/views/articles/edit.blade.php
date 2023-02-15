@extends('layouts/app')
@section('content')
    <style>
        input[type=text],
        input[type=file] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type=submit] {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

        div.form-container {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
        }
    </style>

    <body>


        <div class=" container">
            <h3>Edit {{ $article->name }}</h3>
            <form action="{{ route('admin.articles.update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{ $article->id }}">
                <label for="fname">Name</label>
                <input type="text" name="name" placeholder="article name.." value="{{ $article->name }}">
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror


                <label for="fname">Image</label>
                <input type="file" name="image">
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror

                @if ($article->image)
                    <img src="{{ asset('assets/uploads/articles'."/".$article->image) }}" width=400px
                        height=400px><br><br>
                @endif

                <label for="lname">Image Alt</label>
                <input type="text" name="image_alt" placeholder="article Image Alt.." value="{{ $article->image_alt }}">
                @error('image_alt')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror


                <label for="lname">Description</label>
                <input type="text" name="description" placeholder="article Description.."
                    value="{{ $article->description }}">
                @error('description')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror


                <label for="lname">Short Description</label>
                <input type="text" name="short_description" placeholder="article Short Description.."
                    value="{{ $article->short_description }}">
                @error('short_description')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror


                <label for="lname">Meta Title</label>
                <input type="text" name="meta_title" placeholder="article Meta Title.."
                    value="{{ $article->meta_title }}">
                @error('meta_title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror


                <label for="lname">Meta Description</label>
                <input type="text" name="meta_description" placeholder="article Meta Description.."
                    value="{{ $article->meta_description }}">
                @error('meta_description')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror


                <label for="lname">Keywords</label>
                <input type="text" name="keywords" placeholder="Keywords Seperated by ,"
                    value="{{ $article->keywords }}">
                @error('keywords')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror


                <label for="lname">Url</label>
                <input type="text" name="url" placeholder="Your last name.." value="{{ $article->url }}">
                @error('url')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror

                <input type="submit" value="Submit">
            </form>
        </div>
    @endsection
