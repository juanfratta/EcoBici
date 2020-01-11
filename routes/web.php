<?php

use Illuminate\Support\Facades\Request;
use App\Producto;


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
//RUTA HOME
Route::get('/', function(){
    return view('inicio');
});


//RUTAS USURARIO

Auth::routes();

Route::get('/perfil', function(){
    return view('auth/editarPerfil');
});
Route::post('/perfil', 'editProfileController@editar');//.....

// Route::get('/home', 'HomeController@index')->name('home');



//RUTAS CARRITO

Route::get('/carrito', 'CartController@index')->name('cart')->middleware('auth');

Route::post('/cart/{productId}', 'CartController@addProduct')->name('addProductToCart');

Route::delete('/cart/{productId}', 'CartController@removeProduct')->name('removeProductFromCart');

Route::view('/ordenes', 'orders')->name('orders')->middleware('auth');

Route::post('/orders', 'OrdersController@addOrder')->name('order');



//RUTAS PRODUCTOS


Route::get('/nuevoproducto', function(){
  return view("nuevoproducto");
})->middleware('auth');
Route::post('/nuevoproducto', 'ProductController@crear')->middleware('auth');
//update
Route::post('/actualizarProducto/{id}', 'ProductController@actualizar')->middleware('auth');
Route::post('/guardarProducto', 'ProductController@guardar')->middleware('auth');
Route::get('/producto/{id}', 'ProductController@detalle')->middleware('auth');

//Edicion de caracteristicas de los productos
Route::get('/editarProducto/{id}', 'ProductController@editar')->middleware('auth');
Route::post('/editarProducto/{id}', 'ProductController@update')->middleware('auth');

Route::get('/update/{id}', 'ProductController@update')->middleware('auth');
Route::post('/borrarProducto', 'ProductController@borrar')->middleware('auth');

Route::get('/eliminarProducto/{id}', 'ProductController@eliminar')->middleware('auth');

Route::get('/productos', 'ProductController@listado')->middleware('auth');
Route::post('/productos', 'ProductController@listado')->middleware('auth');

Route::get('/', 'ProductController@listadoHome');


Route::get("/preguntas",function(){
   return view("FAQ");
});
