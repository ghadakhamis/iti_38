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

Route::get('/posts/create','PostsController@create')->middleware('auth');
Route::get('/posts','PostsController@index')->middleware('auth');
Route::post('/posts','PostsController@store')->middleware('auth');
Route::get('/posts/{post}','PostsController@show')->middleware('auth');
Route::get('/posts/{post}/edit','PostsController@edit')->middleware('auth');
Route::post('/posts/{post}','PostsController@update')->middleware('auth');
Route::delete('/posts/{post}','PostsController@destroy')->middleware('auth');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('login/github', 'Auth\LoginController@redirectToProvider');
Route::get('login/github/callback', 'Auth\LoginController@handleProviderCallback');
