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

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('upload','UploadController@index');

Route::post('store','UploadController@store');
Route::get('show','UploadController@show');

Route::get('/upload', 'aboutcontroller@index');


Route::get('/upload', function () {
    return view('upload');
});

Route::get('/about', function () {
    return view('upload');
});





