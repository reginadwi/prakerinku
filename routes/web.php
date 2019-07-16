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

Route::get('/admin', function () {
    return view('welcome');
});

Route::resource('admin/kategori','kategoriController'); 
Route::resource('admin/artikel','ArtikelController'); 
Route::resource('admin/tag','TagController'); //tambahkan baris ini

Route::get('/halaman-kedua', function () {
    return view('halamandua');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
