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

Route::get('/', function () {return view('index');});
Route::get('tienda','TiendaController@index');





Route::get('producto-crear','ProductoController@create');
Route::post('producto-crear','ProductoController@store');
Route::get('opcion/{id}','TiendaController@opcion');
Route::get('detalle/{id}','TiendaController@detalle');
Route::get('producto-lista', function () {return view('admin.producto.lista');});

Route::get('gregar','CarroController@agregar');
Route::get('carro','CarroController@index');
Route::get('pagos','PagosController@index');
