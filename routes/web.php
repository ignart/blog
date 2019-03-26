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

Route::get('contact', function () {

    $name = 'Ignas Lunenas';
    $email = 'hey@ignart.lt';
    $phone = '+37060455792';

    // masyvas ⬇️

    $interests = [

        'Kava',
        'Kompas',
        'Kodas',
        'Dar kazkas'

    ];

    $data = compact('name', 'email' ,'phone', 'interests');

    return view('contact', $data);


});

Route::get('blog' , function () {

    $title = 'Blogo pavadinimas';
    $date = '2019-03-26';
    $content = 'This is my first blog post, lets go!';

    $blogpost = compact('title', 'date', 'content');

    return view('blog' , $blogpost );
});