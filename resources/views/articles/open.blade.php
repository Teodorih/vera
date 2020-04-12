@extends('app')

@section('content')
    <h1>Articles</h1>
        <articles>
            <h2>
                <a>

                </a>
                {{$article->title}}</h2>
            <div class="body">
                {{$article->body}}
            </div>
            <div>
                {{$article->published_at}}
            </div>
        </articles>
@stop
