@extends('layouts.template')
<link rel="stylesheet" href="/css/productos.css">
@section('content')

<div class="container-fluid">
<script src="/js/mapa.js"></script>
<!--<div  id="foot1" class="colFooter col-lg-4 col-md-12"></div>-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBDaeWicvigtP9xPv919E-RNoxfvC-Hqik&callback=iniciarMap"></script>
<div class="container-fluid">


<div class="col-md-12 centered">
    <img src="/storage/{{$producto->imagen}}" alt="..." class=" mx-auto img-thumbnail  border-radius utilities w-25 p-3">
</div>
<div class="row justify-content-md-center" >
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
            <td>{{$producto["nombre"]}}</td>
            <td>{{$producto["precio"]}}</td>
            <td>{{$producto["stock"]}}</td>
            <td>{{$producto["descripcion"]}}</td>
            <td>
                <form class="" action="/borrarProducto" method="post">
                    {{ csrf_field() }}
                  <input type="hidden" name="id" value="{{$producto->id}}">
                    <input class="btn btn-primary" type="submit" name="" value="Borrar Producto">
                  <form>
            </td>
        </tbody>
      </table>





      <!--    <div class="row no-gutters">
          <div class="col-md-4">
            <img src="/storage/{{$producto->imagen}}" class="card-img-top" alt="...">
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






      <div class="row justify-content-md-center col-md-6">
        <form action="/borrarProducto" method="post">
            {{ csrf_field() }}
          <input type="hidden" name="id" value="{{$producto->id}}">
            <input type="submit" name="" value="Borrar Producto">
        <form>
        </div>-->

    <!--<div class="row justify-content-md-center col-md-6" >
        <div class="card col-6" >
            <img src="/storage/{{$producto->imagen}}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{$producto["nombre"]}}</h5>
                <p class="card-text">{{$producto["descripcion"]}}</p>
                <p class="card-text">Precio: {{$producto["precio"]}}</p>
                <p class="card-text">Stock: {{$producto["stock"]}}</p>
            </div>
          </div>
    </div>
-->


</div>

@endsection

<!--
Boody para que ocupe toda la pantalla pero que no se vaya para abajo
meter foto
iconitos
middleware
gps

-->
