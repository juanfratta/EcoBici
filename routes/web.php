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


//rutas de usuario

Auth::routes();

Route::get('/perfil', function(){
    return view('auth/editarPerfil');
});
Route::post('/perfil', 'editProfileController@editar');

//.....

Route::get('/home', 'HomeController@index')->name('home');




//rutas de productos


Route::get('/nuevoproducto', function(){
  return view("nuevoproducto");
})->middleware('auth');
Route::post('/nuevoproducto', 'ProductosController@crear')->middleware('auth');
//update
Route::post('/actualizarProducto/{id}', 'ProductosController@actualizar')->middleware('auth');
Route::post('/guardarProducto', 'ProductosController@guardar')->middleware('auth');
Route::get('/producto/{id}', 'ProductosController@detalle')->middleware('auth');

//Edicion de caracteristicas de los productos
Route::get('/editarProducto/{id}', 'ProductosController@editar')->middleware('auth');
Route::post('/editarProducto/{id}', 'ProductosController@update')->middleware('auth');


Route::get('/update/{id}', 'ProductosController@update')->middleware('auth');
Route::post('/borrarProducto', 'ProductosController@borrar')->middleware('auth');


Route::get('/eliminarProducto/{id}', 'ProductosController@eliminar')->middleware('auth');


Route::get('/productos', 'ProductosController@listado')->middleware('auth');
Route::post('/productos', 'ProductosController@listado')->middleware('auth');


// vistas

// Route::get("/", function (){
// return view('inicioDinamico');
//  });

// Route::get('/', 'ProductosController@listadoHome')->middleware('auth');

Route::get('/', 'ProductosController@listadoHome');




Route::get("/preguntas",function(){
   return view("FAQ");
});


//rutas carrito
Route::get("carrito", function(){
  return view ("carrito");
})->middleware('auth');
Route::post('carrito/{productId}', 'CarritoController@agregarProductos');
Route::get('carrito', 'CarritoController@ventasEnCarrito');
