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

Route::get('/home', 'PostController@index');
Route::get('/', 'PostController@index')->name('home');
Route::get('/create', 'PostController@create');
Route::post('/posts', 'PostController@store');
Route::get('/posts/{id}', 'PostController@show');
Route::get('/posts/{id}/edit', 'PostController@edit');
Route::patch('/posts/{id}', 'PostController@update');
Route::delete('/posts/{id}', 'PostController@destroy');

Route::post('/posts/{id}/comments', 'CommentsController@store');

Route::get('/register', 'RegistrationController@create');
Route::post('/register/submit', 'RegistrationController@store');

Route::get('/login', 'SessionController@create');
Route::post('/login/submit', 'SessionController@store');
Route::get('/logout', 'SessionController@destroy');

/*

GET /posts
GET /posts/create
POST /posts
GET /posts/{id}
GET /posts/{id}/edit
PATCH /posts/{id}
DELETE /posts/{id}

*/
