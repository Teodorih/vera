<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'title',
        'body',
        'published_at'
    ];
    //$article->published_at = Carbon\Carbone::now();
/*
>>> $article = new App\Article;
=> App\Article {#2988}
>>> $article->published_at = Carbon\Carbon::now()
=> Carbon\Carbon @1586704393 {#2993
date: 2020-04-12 15:13:13.052884 UTC (+00:00),
timezone_type: 3,
timezone: "UTC",
}
>>> $article->body = 'Open title'
=> "Open title"
>>> $article->title = 'My first article'
=> "My first article"

 App\Article::all()->toArray();

 $article = App\Article::create(['title' => 'New article', 'body' => 'Test second article', 'published_at' => Carbon\Carbon::now()])
*/
}
