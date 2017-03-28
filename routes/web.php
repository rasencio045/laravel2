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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Users', "UsersController@index");
Route::get('/Users/{user}', "UsersController@show");

Route::get('/Post', "PostController@index");
Route::get('/Post/create', "PostController@create");
Route::post('/Post/create', "PostController@store");

Route::get('/Post/{post}', "PostController@show");

Route::get('/registro', "UsersController@create");
Route::post('/registro', "UsersController@store");
