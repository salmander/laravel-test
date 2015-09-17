@extends('app')

@section('content')
    {!! Form::model($article, ['method' => 'PUT', 'action' => ['ArticlesController@update', $article->id]]) !!}

        {{-- Include partial form --}}
        @include('articles._form', ['submit_btn_text' => 'Update'])

    {!! Form::close() !!}

    {{-- Include error partial --}}
    @include('errors.form_errors')
@stop
