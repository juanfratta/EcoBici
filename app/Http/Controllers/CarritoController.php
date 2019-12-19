<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\carrito_producto;
use App\carrito;
use Illuminate\Support\Facades\Auth;


class CarritoController extends Controller
{


    public function agregarProductos($id){

//traer carrito

    $carrito = carrito::where('user_id', '=', Auth::user()->id)->where('activo', '1')->get();

// crear carrito (no funciona si le pongo el if para setear un solo usuario por carrito)
  if(!$carrito){
    $carrito= new carrito();
    $carrito->user_id = Auth::user()->id;
    $carrito->activo = '1';
    $carrito->save();

  } else{
      $carrito = carrito::where('user_id', '=', Auth::user()->id)->where('activo', '1')->get();

  }

  // //agrego los productos

    $productoEnCarrito = new carrito_producto();

    $productoEnCarrito->carrito_id= $carrito->id;
    $productoEnCarrito->producto_id = $id;
    $productoEnCarrito->save();

    return redirect('/');


  }

}
