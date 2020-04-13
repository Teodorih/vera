@extends('app')

@section('content')
    <h1>Create Paint</h1>

    {!! Form::open(['url' => 'paints']) !!}
    <div class="form-group">
        {!! Form::label('title', 'Title: ') !!}
        {!! Form::text('title', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('published_at', 'published on: ') !!}
        {!! Form::date('published_at', Carbon\Carbon::now()) !!}
    </div>


    <div class="form-group">
        {!! Form::label('url', 'Image') !!}
        {!! Form::file('url') !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Add pain', ['class' => 'btn btn-primary form-control']) !!}
    </div>

    {!! Form::close() !!}
@stop
