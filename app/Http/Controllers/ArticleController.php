<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public  function getArticleDetails($url){
        $articles = Article::where('url','!=',$url)->get();
        $article = Article::where('url',$url)->first();
        return view('pages.article' , compact('articles','article'));
    }
}
