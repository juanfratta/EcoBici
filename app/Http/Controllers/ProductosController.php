<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\producto;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ProductosController extends Controller
{

//Siempre de un form reciben request
public function crear(Request $request){
    $nuevoProducto = new Producto();

    $nuevoProducto->nombre = $request['nombre'];
    $nuevoProducto->precio_venta = $request['precio_venta'];
    $nuevoProducto->precio_compra =$request['precio_compra'];
    $nuevoProducto->stock = $request['stock'];
    $nuevoProducto->descripcion = $request['descripcion'];
    $nuevoProducto->save();

    return redirect("/productos");
}






    //    protected function validator(array $data)
//    {
//        return Validator::make($data, [
//            'nombre' => ['required', 'string', 'max:255'],
//            'precio_venta' => ['required', 'numeric'],
//            'precio_compra' => ['required', 'numeric'],
//            'stock' => ['required', 'string', 'max:255'],
//            'descripcion' => ['required', 'string', 'max:255'],
//        ]);
//    }


//    protected function create(array $data)
//    {
//        return Producto::create([
//            'nombre' => $data['nombre'];
//            'precio_venta' => $data->['precio_venta'];
//            'precio_compra' => $data->['precio_compra'];
//            'stock' = $data=>stock['stock'];
//            'descripcion' => $data['descripcion'];
//
//            ]);
//    }

}
