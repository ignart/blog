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

Route::view('about', 'about');

Route::get('contact', 'ContactController@index')->name('contact');

Route::get('posts', 'PostController@index')->name('posts.index');
Route::get('posts/create', 'PostController@create')->name('posts.create');
Route::get('posts/{id}', 'PostController@show')->name('posts.show');

Route::get('file', 'FileController@index')->name('file.index');
Route::get('file/create', 'FileController@create')->name('file.create');
Route::get('file/{id}', 'FileController@show')->name('file.show');

