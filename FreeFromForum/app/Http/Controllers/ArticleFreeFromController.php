<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleFreeFromController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articlefreefrom=ArticleFreeFrom::all();
        return ArticleFreeFromResource::collection($articlefreefrom);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $articlefreefrom
     * @return \Illuminate\Http\Response
     */
    public function show($article_id)
    {
        $articlefreefrom=ArticleFreeFrom::all()->where('article_id',$article_id)->FirstOrFail();
        return new ArticleFreeFromResource($articlefreefrom);
    }
}
