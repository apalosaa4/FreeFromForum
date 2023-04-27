<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recipes=Recipe::all();
        return view('recipe',['recipes'=>$recipes]);
    }

    public function indexog()
    {
        $recipes=Recipe::all();
        return RecipeResource::collection($recipes);
    }

    public function show($recipe_id)
    {
        $recipe = Recepie::findOrFail($recipe_id)
        ->where('recipe_id', $recipe_id)
        ->first();

        return view('recipeid', compact('recipe'));
    }

}
