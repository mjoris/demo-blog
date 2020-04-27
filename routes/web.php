<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/', function(){
    return redirect(URL::to('/blog'));
});

Route::get('/blog', 'BlogpostController@overview');

/**
 * one blogpost
 */
Route::get('/blogposts/{id}', 'BlogpostController@detail');

/**
 * comments on blogpost
 */
Route::get('/blogposts/{id}/comments', 'BlogpostController@comments');

/**
 * all authors
 */
Route::get('/authors', 'AuthorController@overview');

/**
 * one author
 */
Route::get('/authors/{id}', 'AuthorController@detail');

/**
 * all blogposts of one author
 */
Route::get('/authors/{id}/blogposts', 'AuthorController@blogposts');
