<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Article;
use App\Http\Requests\ArticleRequest;
use Request;

class ArticlesController extends Controller
{
    public function index()
    {
        $articles = Article::latest('published_at')->published()->get();

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

    public function store(ArticleRequest $request)
    {
        Article::create($request->all());

        return redirect('articles/');
    }

    public function edit($id)
    {
        $article = Article::find($id);


        return view('articles.edit', compact('article'));
    }

    public function update($id, ArticleRequest $request)
    {
        $article = Article::find($id);

        $article->update($request->all());

        return redirect('articles/'. $id);
    }
}
