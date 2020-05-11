@extends('app')

@section('content')
    <h1>Create Articles</h1>

    {!! Form::open(['url' => 'articles']) !!}
       @include('articles.partials.form', ['submitButtonText'=>'Add Article'])
        @include('errors.list')
    {!! Form::close() !!}
@stop
