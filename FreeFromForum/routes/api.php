<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::resource('recipe', 'App\Http\Controllers\RecipeController');
Route::resource('freefrom', 'App\Http\Controllers\FreeFromController');
Route::resource('gender', 'App\Http\Controllers\GenderController');
Route::resource('welcome', 'App\Http\Controllers\Controller');
Route::resource('signout', 'App\Http\Controllers\Auth\AuthenticatedSessionController');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
