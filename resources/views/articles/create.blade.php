@extends('app')

@section('content')

    {!! Form::open(['url' => 'articles']) !!}

        {{-- Include partial form --}}
        @include('articles._form', ['submit_btn_text' => 'Add'])

    {!! Form::close() !!}

    {{-- Display errors --}}
    @include('errors.form_errors')
@stop
