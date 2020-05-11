@extends('app')

@section('content')

    <h1> Edit: {!! $article->title !!}</h1>

    {!! Form::model($article, ['method' => 'PATCH', 'url' => 'articles/'.$article->id]) !!}
    @include('articles.partials.form', ['submitButtonText'=>'Edit Article'])

    @include('errors.list')

@stop
