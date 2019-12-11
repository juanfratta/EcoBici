@extends('layouts.app')

@section('content')
<div class="container-fluid">
  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Nombre</th>
        <th scope="col">Precio de venta</th>
        <th scope="col">Precio de compra</th>
        <th scope="col">Stock</th>
        <th scope="col">Descripcion</th>
        <th scope="col">Imagen</th>
        <th scope="col">Accion</th>


      </tr>
    </thead>
    <tbody>
        @forelse ($productos as $producto)
        <td>{{$producto["nombre"]}}</td>
        <td>{{$producto["precio_compra"]}}</td>
        <td>{{$producto["precio_venta"]}}</td>
        <td>{{$producto["stock"]}}</td>
        <td>{{$producto["descripcion"]}}</td>
        <td>{{$producto["imagen"]}}</td>
        <td>
        <a href="producto/{{ $producto->id }}"><span class="label label-info">Ver</span></a>
		 <a href="editarProducto/{{ $producto->id }}"><span class="label label-success">Editar</span></a>
        </td>
        @empty
        <td>Sin especificar</td>
        @endforelse
    </tbody>
  </table>
</div>
  @endsection

