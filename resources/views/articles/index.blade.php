@extends('app')

@section('content')
    <h1>Articles</h1>
    @foreach( $articles as $article)
        <articles>
            <h2>
{{--                <a href="/articles/{{$article->id}}">--}}
                <a href="{{ action('ArticlesController@show', $article->id) }}">
                    {{$article->title}}
                </a>
            </h2>
            <div class="body">
                {{$article->body}}
            </div>
            <div>
                {{$article->published_at}}
            </div>
        </articles>
    @endforeach
@stop
