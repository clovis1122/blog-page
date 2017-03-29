<?php

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


Route::get('/', 'PostController@index');
Route::get('/create', 'PostController@create');
Route::post('/posts', 'PostController@store');
Route::get('/posts/{id}', 'PostController@show');
Route::get('/posts/{id}/edit', 'PostController@edit');
Route::patch('/posts/{id}', 'PostController@update');
Route::delete('/posts/{id}', 'PostController@destroy');


/*

GET /posts
GET /posts/create
POST /posts
GET /posts/{id}
GET /posts/{id}/edit
PATCH /posts/{id}
DELETE /posts/{id}

*/
