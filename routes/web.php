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
    return view('Home');
});
Route::get('/codigo', function () {
    return view('Busqueda/codigo');
});
Route::get('/nombre', function () {
    return view('Busqueda/nombre');
});
Route::get('/clase', function () {
    return view('Busqueda/clase');
});
Route::get('/tipo', function () {
    return view('Busqueda/tipo');
});
Route::get('/compras', function () {
    return view('Compras/compras');
});





Route::get('productos','crearMatrizController@matrizCompleta');
Route::post('formulario','crearMatrizController@llenarmatriz');
Route::post('formulariocompras','crearMatrizController@compras');