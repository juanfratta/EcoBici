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
        //"precio_compra"=>"required|numeric|min:0",
        "precio"=>"required|numeric|min:0",
        "stock"=>"required|numeric",
        "descripcion"=>"required|string|max:256",
        "imagen"=>"required|file"


    ];

    $mensajes =[
        "string"=>"El campo :attribute debe ser un texto",
        "min"=>"El campo :attribute tiene un minimo de :min",
        "max"=>"El campo :attribute tiene un maximo de :max",
        "required"=>"El campo :attribute no puede quedar en blanco",
        "file"=>"El campo :attribute debe ser un archivo de foto"
    ];

    $this->validate($request, $reglas, $mensajes);

    //$ruta = $request->file("imagen")->store("public");
    //$nombreArchivo =basename($ruta);

    $archivo = $request['imagen'];
    $rutaImagen = $archivo->store('public');
    $imagen = basename($rutaImagen);

    $nuevoProducto = new Producto();
    $nuevoProducto->imagen = $imagen;
    $nuevoProducto->nombre = $request['nombre'];
    $nuevoProducto->precio= $request['precio'];
    //$nuevoProducto->precio_compra =$request['precio_compra'];
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



public function listadoHome(){
    $productos = Producto::paginate(6);
    $vac = compact("productos");
    return view("inicioDinamico",$vac );
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


public function update(Request $request,$id){
    $reglas =[
        "nombre"=>"required|string|min:5",
        //"precio_compra"=>"required|numeric|min:0",
        "precio"=>"required|numeric|min:0",
        "stock"=>"required|numeric",
        "descripcion"=>"required|string|max:256",
        "imagen"=>"required|file"


    ];

    $mensajes =[
        "string"=>"El campo :attribute debe ser un texto",
        "min"=>"El campo :attribute tiene un minimo de :min",
        "max"=>"El campo :attribute tiene un maximo de :max",
        "required"=>"El campo :attribute no puede quedar en blanco",
        "file"=>"El campo :attribute debe ser un archivo de foto"
    ];

    $this->validate($request, $reglas, $mensajes);


        $producto = Producto::find($id);
        $producto->nombre = $request['nombre'];
        //$producto->precio_venta = $request['precio_venta'];
        $producto->precio =$request['precio'];
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



}
