@extends('app')

@section('content')
    <h1>Paints</h1>
    @foreach( $paints as $paint)
        <articles>
            <h2>
                <a href="{{ action('PaintsController@open', $paint->id) }}">
                    {{$paint->title}}
                </a>
            </h2>
            <div class="body">
                {{$paint->url}}
            </div>
            <div>
                {{$paint->published_at}}
            </div>
        </articles>
    @endforeach
@stop
