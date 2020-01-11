@extends('layouts.template')

@section('content')

<link rel="stylesheet" href="/css/styleHome.css">

<div class="container">
  <div class="carrito">
    <table class="table">
      <thead class="thead-dark">
          <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Precio</th>
            <th scope="col">Stock</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Accion</th>
          </tr>
      </thead>

      <tbody>
        <td><img class="imagen-producto" src="/storage/{{$producto->imageUrl}}"></td>
        <td>{{$producto["name"]}}</td>
        <td>{{$producto["price"]}}</td>
        <td>{{$producto["description"]}}</td>
        <td>
            <form class="" action="/borrarProducto" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{$producto->id}}">
                <input class="btn btn-primary" type="submit" name="" value="Borrar Producto">
                <form>
                </td>
        </tbody>
      </table>
</div>
</div>

@endsection
