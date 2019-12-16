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
});
Route::post('/nuevoproducto', 'ProductosController@crear');
//update
Route::post('/actualizarProducto/{id}', 'ProductosController@actualizar');
Route::post('/guardarProducto', 'ProductosController@guardar');
Route::get('/producto/{id}', 'ProductosController@detalle');

//Edicion de caracteristicas de los productos
Route::get('/editarProducto/{id}', 'ProductosController@editar');
Route::post('/editarProducto/{id}', 'ProductosController@update');


Route::get('/update/{id}', 'ProductosController@update');
Route::post('/borrarProducto', 'ProductosController@borrar');


Route::get('/eliminarProducto/{id}', 'ProductosController@eliminar');


Route::get('/productos', 'ProductosController@listado');
Route::post('/productos', 'ProductosController@listado');


// vistas

// Route::get("/", function (){
// return view('inicioDinamico');
//  });

Route::get('/', 'ProductosController@listadoHome');



Route::get("/preguntas",function(){
   return view("FAQ");
});
