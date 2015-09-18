<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Article;
use App\Http\Requests\ArticleRequest;

class ArticlesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['only' => ['create', 'edit']]);
    }


    public function index()
    {
        $articles = Article::latest('published_at')->published()->get();

        return view('articles.index', compact('articles'));
    }

    public function show($id)
    {
        $article = Article::find($id);

        return view('articles.view', ['article' => $article]);
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store(ArticleRequest $request)
    {
        // Create a new instance of Article object and fill it with $request object/values
        $article = new Article($request->all());

        \Auth::user()->articles() // Get articles for this user (this establishes a relationship)
            ->save($article); // Save the $article object with user_id

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
