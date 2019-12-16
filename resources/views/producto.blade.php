@extends('layouts.template')
<link rel="stylesheet" href="/css/productos.css">
@section('content')

<div class="container-fluid">
<!--<script src="/js/mapa.js"></script>
<div id="map"></div>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBDaeWicvigtP9xPv919E-RNoxfvC-Hqik&callback=iniciarMap"></script>-->
<div class="card mb-3" style="max-width: 540px;">
        <div class="row no-gutters">
          <div class="col-md-4">
            <img src="/storage/app/public/{{$producto["imagen"]}}" class="card-img" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
                    <h5 class="card-title">{{$producto["nombre"]}}</h5>
                    <p class="card-text">{{$producto["descripcion"]}}</p>
                    <p class="card-text">Precio: {{$producto["precio"]}}</p>

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

<!--
Boody para que ocupe toda la pantalla pero que no se vaya para abajo
meter foto
iconitos
middleware
gps

-->
