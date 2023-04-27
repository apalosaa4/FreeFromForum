<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles=Article::all();
        return view('article',['articles'=>$articles]);
    }

    public function indexog()
    {
        $articles=Article::all();
        return ArticleResource::collection($articles);
    }

    public function show($article_id)
    {
        $article = Recepie::findOrFail($article_id)
        ->where('article_id', $article_id)
        ->first();

        return view('articleid', compact('article'));
    }
}
