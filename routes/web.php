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

Route::get('/home', function(){
	return view('home.index');
})->name('home');

Route::get('user/registro', function () {
	return view('user.registro');
})->name('user.registro');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::post('autenticar', 'LoginController@autenticar')->name('autenticar');
Route::post('user/registrar', 'UserController@registrar')->name('user.registrar');

Route::middleware('auth')->group(function() {
	//usuário
	Route::get('user/listar', 'UserController@listar')->name('user.listar');
	Route::get('user/deletar/{usuario}', 'UserController@deletar')->name('user.deletar');
	Route::get('user/detalhes/{id}', 'UserController@detalhes')->name('user.detalhes');
	Route::post('user/permissoes/{usuario}', 'UserController@atribuiPermissoes')->name('user.permissoes');
});