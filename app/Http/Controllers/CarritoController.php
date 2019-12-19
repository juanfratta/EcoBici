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

//traer carrito si esta activo

$carrito = carrito::where('user_id', '=', Auth::user()->id)->where('activo', '1')->get();

// crear carrito en caso de que no este activo

if($carrito->isEmpty()){
    $carrito= new carrito();
    $carrito->user_id = Auth::user()->id;
    $carrito->activo = '1';
    $carrito->save();

    }

  // //agrego los productos

    $productoEnCarrito = new carrito_producto();
    $productoEnCarrito->carrito_id= $carrito[0]->id;
    $productoEnCarrito->producto_id = $id;
    $productoEnCarrito->save();
  return redirect('/');

  }

  public function ventasEnCarrito(){
    $carrito = carrito::where('user_id', '=', Auth::user()->id)
    ->where('activo', '1')->get();
    $productos = carrito_producto::where('carrito_id', '=', $carrito[0]->id)->get();
    $vac = compact("carrito", "productos");
    return view("carrito", $vac );
    }



  }
