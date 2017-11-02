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
    return view('login.index');
})->name('index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('autenticar', 'LoginController@autenticar')->name('autenticar');

Route::get('user/registro', function () {
	return view('user.registro');
})->name('user.registro');

Route::post('user/registrar', 'UserController@registrar')->name('user.registrar');