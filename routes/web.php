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

//Route::get('about', function () {
//    return view('about');
//});

Route::view('about', 'about');

Route::get('contact', 'ContactController@index')->name('contact');

//Route::resource('posts', 'PostController');

Route::get('posts', 'PostController@index')->name('posts.index');
Route::get('posts/create', 'PostController@create')->name('posts.create');
Route::get('posts/{id}', 'PostController@show')->name('posts.show');


//Route::get('blog' , function () {
//
//    $title = 'Blogo pavadinimas';
//    $date = '2019-03-26';
//    $content = 'This is my first blog post, lets go!';
//
//    $blogpost = compact('title', 'date', 'content');
//
//    return view('blog' , $blogpost );
//
//});