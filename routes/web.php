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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route::get('/productos', 'ProductosController@listado');




Route::get('/productos', function () {
    return view('productos');
});

/**
 * Add A New Task
 */
Route::post('/producto', function (Request $request) {

    $validator = Validator::make($request::all(), [
        'nombre' => ['required', 'string', 'max:255'],
        'precio_venta' => ['required', 'numeric'],
        'precio_compra' => ['required', 'numeric'],
        'stock' => ['required', 'string', 'max:255'],
        'descripcion' => ['required', 'string', 'max:255'],
    ]);
    if ($validator->fails()){
        return redirect('/productos')
        ->whitInput()
        ->withErrors($validator);
    }

    $producto = new Producto;
    $producto->nombre = $request->nombre;
    $producto->precio_venta = $request->precio_venta;
    $producto->precio_compra = $request->precio_compra;
    $producto->stock = $request->stock;
    $producto->descripcion = $request->descripcion;

    $producto->save();

    return redirect('/productos');
});




/**
 * Delete An Existing Task
 */
Route::delete('/producto/{id}', function ($id) {
    //
});
