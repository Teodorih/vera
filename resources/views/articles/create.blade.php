@extends('app')

@section('content')
    <h1>Create Articles</h1>

    {!! Form::open(['url' => 'articles']) !!}
        <div class="form-group">
            {!! Form::label('title', 'Title: ') !!}
            {!! Form::text('title', null, ['class' => 'form-control']) !!}
        </div>


    <div class="form-group">
        {!! Form::label('body', 'Body: ') !!}
        {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('published_at', 'published on: ') !!}
        {!! Form::date('published_at', Carbon\Carbon::now()) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Add article', ['class' => 'btn btn-primary form-control']) !!}
    </div>
    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li> {{ $error }}</li>
            @endforeach
        </ul>
    @endif
    {!! Form::close() !!}
@stop
