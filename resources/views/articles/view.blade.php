@extends('app')

@section('content')
    {!! Form::model($article) !!}
        @include('articles._form')
    {!! Form::close() !!}
@stop
