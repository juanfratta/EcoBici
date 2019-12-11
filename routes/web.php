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
    return view('inicio');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/productos', function(){
    return view("productos");
});

Route::post('/productos', 'ProductosController@crear');

// Route Jose Luis
 Route::get("/inicio", function (){
   return view('/');
 });

// Ruta al FAQ
Route::get("/preguntas",function(){
   return view("FAQ");
});
