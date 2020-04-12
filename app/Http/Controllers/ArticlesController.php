<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        return view('articles.index', compact('articles'));
        //return view('article.index') -> with ('articles', $articles);
    }

    public function open($id)
    {
        $article = Article::findorfail($id);
        //ree
        // return view('articles.index') -> with ('articles', [$article]);

        //  return $id;
        //if(is_null($article)){
        //    abort(404);
        //}
        return view('articles.show')->with('article', $article);

        // return dd($article);
    }
}
