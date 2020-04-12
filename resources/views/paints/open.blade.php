@extends('app')

@section('content')
    <h1>Paint</h1>
        <articles>
            <h2>
                <a>

                </a>
                {{$paint->title}}</h2>
            <div class="body">
                {{$paint->url}}
            </div>
            <div>
                {{$paint->published_at}}
            </div>
        </articles>
@stop
