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

Route::get('error/{code}', function ($code){
    abort($code);
});

Route::get('mail-template', function (){
    $post = \App\Post::orderBy('created_at', 'DESC')->first();

//    Mail::to()->send(new \App\Mail\PostPublished($post));

    return new \App\Mail\PostPublished($post);
});

Route::get('contact', 'ContactController@index')->name('contact');

Route::get('posts', 'PostController@index')->name('posts.index');
Route::get('posts/create', 'PostController@create')->name('posts.create');
Route::get('posts/{id}', 'PostController@show')->name('posts.show');
Route::post('posts', 'PostController@store')->name('posts.store');
Route::get('posts/{id}/edit', 'PostController@edit')->name('posts.edit');
Route::put('posts/{id}', 'PostController@update')->name('posts.update');
Route::delete('posts/{id}', 'PostController@destroy')->name('posts.destroy');

Route::post('duplicate-post', 'DuplicatePost')->name('posts.duplicate');
Route::post('restore-post', 'RestorePost')->name('posts.restore');

Route::get('top-posts', 'ShowTopPosts')->name('posts.top');
Route::get('recent-posts', 'ShowRecentPosts')->name('posts.recent');
Route::get('deleted-posts', 'ShowDeletedPosts')->name('posts.deleted');

Route::get('file', 'FileController@index')->name('file.index');
Route::get('file/create', 'FileController@create')->name('file.create');
Route::get('file/{id}', 'FileController@show')->name('file.show');
Route::post('file', 'FileController@store')->name('file.store');
Route::get('file/{id}/edit', 'FileController@edit')->name('file.edit');
Route::put('file/{id}', 'FileController@update')->name('file.update');
Route::delete('file/{id}', 'FileController@destroy')->name('file.destroy');

Route::resource('comments', 'CommentController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
