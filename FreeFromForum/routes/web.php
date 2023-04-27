<?php

use App\Http\Controllers\Demo;
use App\Http\Controllers\AngularController;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\WelcomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {return view('welcome');});

//Route::any('/{any}', [AngularController::class, 'index'])->where('any', '^(?!api).*$');
Route::get('/profile', 'ProfileController@show')->name('profile');
Route::get('/signout', '\App\Http\Controllers\Auth\AuthenticatedSessionControllers@signout')->name('signout');

Route::get('/recipes', 'RecipeController@index')->name('recipes');
Route::get('/recipeid', 'RecipeController@show')->name('recipeid');

Route::get('/articles', 'ArticleController@index')->name('articles');
Route::get('/articleid', 'ArticleController@show')->name('articleid');

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('socials', 'SocialsController@show')->name('socials');

Route::get('/angular', function () {return view('angular');});

Route::get('/recipedemo', function () {return view('recipedemo');});