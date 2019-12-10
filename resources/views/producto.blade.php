@extends('layouts.app')

@section('content')
<div class="container-fluid">

<div class="card mb-3" style="max-width: 540px;">
        <div class="row no-gutters">
          <div class="col-md-4">
            <img src="images/bici7.jpg" class="card-img" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
                    <h5 class="card-title">{{$producto["nombre"]}}</h5>
                    <p class="card-text">{{$producto["descripcion"]}}</p>
                    <p class="card-text">Precio de compra: {{$producto["precio_compra"]}}</p>
                    <p class="card-text">Precio de venta: {{$producto["precio_venta"]}}</p>
                    <p class="card-text">Stock: {{$producto["stock"]}}</p>
            </div>
          </div>
        </div>
      </div>
      <form class="" action="/borrarProducto" method="post">
        {{ csrf_field() }}
      <input type="hidden" name="id" value="{{$producto->id}}">
        <input type="submit" name="" value="Borrar Producto">
      <form>
@endsection
