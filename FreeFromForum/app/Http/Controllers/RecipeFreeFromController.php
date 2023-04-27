<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecipeFreeFromController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recipefreefrom=RecipeFreeFrom::all();
        return RecipeFreeFromResource::collection($recipefreefrom);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $recipefreefrom
     * @return \Illuminate\Http\Response
     */
    public function show($recipe_id)
    {
        $recipefreefrom=RecipeFreeFrom::all()->where('recipe_id',$recipe_id)->FirstOrFail();
        return new RecipeFreeFromResource($recipefreefrom);
    }
}
