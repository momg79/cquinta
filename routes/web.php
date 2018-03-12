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
    return view('portada');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Articulos
Route::resource('articles','ArticleController');

//Categorias
Route::resource('categorias','CategoriaController');

//Jugadores
Route::resource('jugadores','JugadorController');

//Mis Pagos
Route::resource('mispagos','MipagoController');

//Pagos
Route::resource('pagos','PagoController');
Route::get('correo/{correo}/{sostenedor}/{deuda}/{periodo}/{jugador}','PagoController@correo');

//test
Route::get('/test/datepicker', function () {
    return view('datepicker');
});

