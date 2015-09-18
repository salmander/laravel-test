@extends('app')

@section('content')
    {!! Form::model($article) !!}
        @include('articles._form')
    {!! Form::close() !!}

    <div class="form-group">
        {!! Form::label('user', 'Published By:') !!}
        {!! Form::text('user', $article->user->name, ['class' => 'form-control']) !!}
    </div>
@stop
