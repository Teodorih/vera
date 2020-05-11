<?php

namespace App\Http\Controllers;

use App\Article;
//use Illuminate\Http\Request;
use App\Http\Requests\ArticleRequest;
use Carbon\Carbon;
use Request;

class ArticlesController extends Controller
{
    public function index()
    {
        //$articles = Article::all();
       // $articles = Article::latest()->get();
       // $articles = Article::latest()->unpublished()->get();

        $articles = Article::latest('published_at')->where('published_at', '<=', Carbon::now())->get();
        //$articles = Article::order_by('published_at', 'desc')->get();
        return view('articles.index', compact('articles'));
        //return view('article.index') -> with ('articles', $articles);
    }

    public function show($id)
    {
        $article = Article::findorfail($id);
        // return view('articles.index') -> with ('articles', [$article]);

        //  return $id;
        //if(is_null($article)){
        //    abort(404);
        //}

        //dd($article->created_at->diffForHumans());
        return view('articles.open')->with('article', $article);

        // return dd($article);
    }
    public function create()
    {
        return view('articles.create');
    }
    public function store(ArticleRequest $request)
    {
        //if request is standart laravel then we can use: $this->>validate($request, ['title' => 'required'])


        $input = Request::all();
       // $input['published_at'] = Carbon::now();

        //Request::get('title');
       Article::create($input);
       return redirect('articles');
    }
    public function edit($id){
        $article = Article::findorfail($id);
        return view('articles.edit')->with('article', $article);
    }
    public function update($id, ArticleRequest $request){
        $article = Article::findOrFail($id);
        $article->update( Request::all());
        return redirect('articles');
    }
}
