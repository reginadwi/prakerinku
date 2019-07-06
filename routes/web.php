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
//

Route::get('/', function () {
    return view('layouts/index');
});
Route::get('/contact', function () {
    return view('layouts/contact');
});
Route::get('/archive', function () {
    return view('layouts/archive');
});
Route::get('/about', function () {
    return view('layouts/about');
});
Route::get('/submit-video', function () {
    return view('layouts/submit-video');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
