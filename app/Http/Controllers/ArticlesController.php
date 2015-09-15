<?php

namespace App\Http\Controllers;

use Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Article;

class ArticlesController extends Controller
{
    public function index()
    {
        $articles = Article::latest('published_at')->unpublished()->get();

        return view('articles.index', compact('articles'));
    }

    public function show($id)
    {
        $article = Article::find($id);

        //dd($article->published_at->diffForHumans());

        return $article;
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store()
    {
        $request = Request::all();

        Article::create($request);

        return redirect('/');
    }
}
