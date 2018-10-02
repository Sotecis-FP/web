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
Route::get('administracion',function(){
  return view('login');
});
Route::get('logout','UserController@logout');
Route::post('verificar','UserController@verificar');


//Tienda
Route::get('subcategoria/{id}','TiendaController@subcategoria');
Route::get('productos/{id}','TiendaController@getProductos');
Route::get('procategoria/{id}','TiendaController@getProCategoria');


Route::get('opcion/{id}','TiendaController@opcion');
Route::get('detalle/{id}','TiendaController@detalle');


Route::get('gregar','CarroController@agregar');
Route::get('carro','CarroController@index');
Route::get('pagos','PagosController@index');

//Carrito
Route::get('cart/show','CartController@show')->name('cart.show');
Route::post('cart/add/{producto}','CartController@add');
Route::get('cart/delete/{producto}','CartController@delete');
Route::post('pagar','CartController@pagar');
Route::post('recogertienda','CartController@tienda');
Route::post('detalle_compra','CartController@detalleCompra');

Route::get('crear/orden','CartController@crearOrden');


//PANEL DE ADMINISTRACION
Route::middleware(['auth'])->group(function(){
Route::get('dashboard','DashboardController@index');
});


Route::get('producto/lista','ProductoController@listar')->name('producto.listar');
Route::get('producto/ver/{producto}','ProductoController@ver')->name('producto.ver');
Route::get('producto/editar/{producto}','ProductoController@editar')->name('producto.editar');
Route::post('producto/actualizar/{producto}','ProductoController@actualizar')->name('producto.actualizar');
//PRODUCTOS
Route::get('producto-crear','ProductoController@create');
Route::post('producto-crear','ProductoController@store');
    // ADMIN ORDEN
Route::get('orden/lista','OrderController@listar')->name('orden.listar');
Route::get('orden/ver/{id}','OrderController@ver')->name('orden.ver');
Route::get('orden/editar/{orden}','OrderController@editar')->name('orden.editar');
Route::post('orden/editar/{orden}','OrderController@actualizar')->name('orden.actualizar');
Route::get('orden/buscar/{estado}','OrderController@buscar')->name('orden.buscar');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
