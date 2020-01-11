<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{

//Siempre de un form reciben request
public function crear(Request $request){

    $reglas =[
        "name"=>"required|string|min:5",
        "price"=>"required|numeric",
        "description"=>"required|string|max:256",
        "imageUrl"=>"required|file"


    ];

    $mensajes =[
        "string"=>"El campo :attribute debe ser un texto",
        "min"=>"El campo :attribute tiene un minimo de :min",
        "max"=>"El campo :attribute tiene un maximo de :max",
        "required"=>"El campo :attribute no puede quedar en blanco",
        "file"=>"El campo :attribute debe ser un archivo de foto"
    ];

    $this->validate($request, $reglas, $mensajes);

    //$ruta = $request->file("imageUrl")->store("public");
    //$nameArchivo =basename($ruta);

    $archivo = $request['imageUrl'];
    $rutaimageUrl = $archivo->store('public');
    $imageUrl = basename($rutaimageUrl);

    $nuevoProducto = new Product();
    $nuevoProducto->imageUrl = $imageUrl;
    $nuevoProducto->name = $request['name'];
    $nuevoProducto->price= $request['price'];
    $nuevoProducto->description = $request['description'];
    $nuevoProducto->save();

    return redirect("/nuevoproducto");
}

public function listado(){
    $productos = Product::all();
    $vac = compact("productos");
    return view("productos",$vac );
}


public function listadoHome(){
    $productos = Product::paginate(6);
    $vac = compact("productos");
    return view("inicio",$vac );
}


public function detalle($id){
    $producto = Product::find($id);
    $vac = compact("producto");
    return view('producto',$vac);
}

public function editar($id){
        $producto = Product::find($id);
        $vac = compact("producto");
        return view('editarProducto',$vac);
}


public function update(Request $request,$id){
    $reglas =[
        "name"=>"required|string|min:5",
        "price"=>"required|numeric|min:0",
        "description"=>"required|string|max:256",
        "imageUrl"=>"required|file"


    ];

    $mensajes =[
        "string"=>"El campo :attribute debe ser un texto",
        "min"=>"El campo :attribute tiene un minimo de :min",
        "max"=>"El campo :attribute tiene un maximo de :max",
        "required"=>"El campo :attribute no puede quedar en blanco",
        "file"=>"El campo :attribute debe ser un archivo de foto"
    ];

    $this->validate($request, $reglas, $mensajes);


        $producto = Product::find($id);
        $producto->name = $request['name'];
        $producto->price =$request['price'];
        $producto->description = $request['description'];
        $producto->save();
        return redirect("/productos");
    }


    public function borrar(Request $request){
        $id = $request["id"];
        $producto = Product::find($id);
        $producto->delete();

        return redirect("/productos");
    }



}
