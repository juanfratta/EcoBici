


  @extends('layouts.template')

@section('content')


  <link rel="stylesheet" href="/css/productos.css">



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
          @forelse ($productos as $producto)

          <tbody>
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

@endsection
