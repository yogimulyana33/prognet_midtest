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

Route::get('/kelompok','KelompokController@index');
Route::get('/kelompok/tambah','KelompokController@tambah');
Route::post('/kelompok/store','KelompokController@Store');
Route::get('/kelompok/edit/{id}','KelompokController@edit');
Route::post('/kelompok/update','KelompokController@update');
Route::get('/kelompok/hapus/{id}','KelompokController@hapus');
