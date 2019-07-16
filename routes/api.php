<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::group(['middleware'=>'cors'],function(){
	//isi route disini
});
Route::resource('categories', 'CategoryAPIController', [
    'only' => ['index', 'show', 'store', 'update', 'destroy']
]);
Route::resource('siswa','tugasController');
Route::resource('Sekolah','SekolahController');

Route::resource('admin/siswa','siswaController');
Route::resource('admin/kategori','kategorisController');
Route::resource('admin/tag','TagsController');
Route::resource('admin/artikel','ArtikelsController');








