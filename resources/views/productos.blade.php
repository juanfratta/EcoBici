@extends('layouts.template')

@section('content')

<div class="container form-carrito">
  <div class="carrito col-6">
        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">Imagen</th>
              <th scope="col">Nombre</th>
              <th scope="col">Precio</th>
              <th scope="col">Accion</th>
            </tr>
          </thead>
          @forelse ($productos as $producto)

          <tbody>
              <td><img class="imagen-producto" src="storage/{{$producto->imageUrl}}"</td>
              <td><p class='title-product'>{{$producto["name"]}}</p></td>
              <td>${{$producto["price"]}}</td>
              <td>
              <a href="producto/{{ $producto->id }}">
              <button type="button" class="btn btn-info">Ver +</button></a>
              <br>
              <br>
              <a href="editarProducto/ {{$producto->id}}">
              <button type="button" class="btn btn-success editar-2">Editar</button></a>
              </td>
              @empty
              <td>Sin especificar</td>
              @endforelse
          </tbody>
        </table>
      </div>
</div>
@endsection
