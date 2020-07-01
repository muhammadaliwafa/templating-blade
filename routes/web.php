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
    return view('index');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/test', function(){
    return view('test');
});

Route::get('/test/{angka}', function($angka){
    return view('test', ['angka' => $angka]);
});
Route::get('/master', function(){
    return view('adminlte/master');
});
Route::get('/items', function(){
    return view('items.index');
});

Route::get('/halo/{nama}', function($nama){
    return "halo $nama";
});

Route::get('/form', 'RegisterController@form');

Route::get('/sapa', 'RegisterController@sapa');

Route::post('/sapa', 'RegisterController@sapa_post');
Route::post('/welcome', 'RegisterController@greeting');

