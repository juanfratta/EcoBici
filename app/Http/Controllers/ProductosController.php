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

    $reglas =[
        "nombre"=>"required|string|min:5",
        "precio_compra"=>"required|numeric|min:0",
        "precio_venta"=>"required|numeric|min:0",
        "stock"=>"required|numeric",
        "descripcion"=>"required|string|max:256",
        "imagen"=>"file"

    ];

    $mensajes =[
        "string"=>"El campo :atribute debe ser un texto",
        "min"=>"El campo :atribute tiene un minimo de :min",
        "max"=>"El campo :atribute tiene un maximo de :max",
        "required"=>"El campo :atribute no puede quedar en blanco"
    ];

    $this->validate($request, $reglas, $mensajes);

    $ruta = $request->file("imagen")->store("public");
    $nombreArchivo =basename($ruta);

    $nuevoProducto = new Producto();
    $nuevoProducto->imagen =$nombreArchivo;
    $nuevoProducto->nombre = $request['nombre'];
    $nuevoProducto->precio_venta = $request['precio_venta'];
    $nuevoProducto->precio_compra =$request['precio_compra'];
    $nuevoProducto->stock = $request['stock'];
    $nuevoProducto->descripcion = $request['descripcion'];
    $nuevoProducto->save();
    return redirect("/nuevoproducto");
}

public function listado(){
    $productos = Producto::all();
    $vac = compact("productos");
    return view("productos",$vac );
}

public function detalle($id){
    $producto = Producto::find($id);
    $vac = compact("producto");
    //esto crea la vista directamente.
    return view('producto',$vac);
}

public function editar($id){
        $producto = Producto::find($id);
        $vac = compact("producto");
        return view('editarProducto',$vac);
}


public function update($id){
        $producto = Producto::find($id);
        $producto->nombre = $request['nombre'];
        $producto->precio_venta = $request['precio_venta'];
        $producto->precio_compra =$request['precio_compra'];
        $producto->stock = $request['stock'];
        $producto->descripcion = $request['descripcion'];
        $producto->save();
        return redirect("/productos");
    }

    public function borrar(Request $request){
        $id = $request["id"];
        $producto = Producto::find($id);
        $producto->delete();

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
