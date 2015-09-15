@extends('app')

@section('content')
    <h2>List of articles:</h2>
    @foreach($articles as $article)
        <div class="title"><a href="{{ action('ArticlesController@show', $article->id) }}">{{ $article->title }}</a></div>
        <div class=content>{{ $article->description }}</div>
    @endforeach
@stop
