<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecipeIngredientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recipeingredient=RecipeIngredient::all();
        return RecipeIngredientResource::collection($recipeingredient);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $recipeIngredient
     * @return \Illuminate\Http\Response
     */
    public function show($recipe_id)
    {
        $recipeingredient=RecipeIngredient::all()->where('recipe_id',$recipe_id)->firstOrFail();
        return new RecipeIngredientResource($recipeingredient);
    }
}
