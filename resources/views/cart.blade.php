@extends('layouts.template')

@section('content')

<div class="container">
  <div class="row form-carrito">
    <div class="carrito col-md-6">
      <h2>Mi carrito:</h2>
      @if (Auth::user()->productsInCart->isNotEmpty())
        <table class="table table-borderless">
          <thead>
            <tr>
              <th scope="col">Producto</th>
              <th scope="col">Cantidad</th>
              <th scope="col">Precio</th>
              <th scope="col">Acciones</th>
            </tr>
          </thead>
          <tbody>
            @foreach(Auth::user()->productsInCart as $productInCart)
              <tr>
                <td>
                  <img src="storage/{{$productInCart->product->imageUrl}}" alt="{{ $productInCart->product->name }}" width="100px">
                {{-- <td>{{ $productInCart->product->name }}</td> --}}
                <td>{{ $productInCart->count }}</td>
                <td>${{ $productInCart->product->price }}</td>
                <td>
                  <form action="{{ route('removeProductFromCart', ['productId' => $productInCart->product->id]) }}" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="product_id" value="{{ $productInCart->product->id }}">
                    <button class="btn btn-danger" type="submit">Eliminar</button>
                  </form>
                </td>
              </tr>
            @endforeach
              <tr>
                <td colspan="1" class="text-right h5">Total:</td>
                <td>${{ Auth::user()->cartTotal() }}</td>
                <td>
                  <form action="{{ route('order') }}" method="post">
                    {{ csrf_field() }}
                    <button class="btn btn-success" type="submit">Comprar</button>
                  </form>
                </td>
              </tr>
            </tbody>
          </table>
        @else
          <br><br>
          <h5>No hay productos en el carrito</h5>
        @endif
    </div>
  </div>
</div>
@endsection
