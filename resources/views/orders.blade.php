@extends('layouts.template')

@section('content')
<link rel="stylesheet" href="/css/styleHome.css">
<div class="container">
  <div class="row form-carrito">
    <div class="carrito col-md-6">
      <h1>Mis compras</h1>
      @if (Auth::user()->orders->isNotEmpty())
        <table class="table table-borderless">
          <thead>
            <tr>
              <th scope="col">Compra N°</th>
              <th scope="col">Fecha</th>
              <th scope="col">Total</th>
            </tr>
          </thead>
          <tbody>

            @foreach(Auth::user()->orders as $order)
              <tr class="order-row">

                @if ($loop->last)
                  <td>{{ $order->id}}</td>
                  <td>{{ $order->created_at}}</td>
                  <td>${{ $order->total}}</td>

                @endif

                {{-- <td>{{ $order->id->last()}}</td>
                <td>{{ $order->created_at}}</td>
                <td>${{ $order->total}}</td> --}}
              </tr>
              <tr class="order-{{ $order->id }}-detail d-none">
                <td colspan="3">
      <table class="table table-borderless table-dark">
                    <thead>
                      <tr>
                        <th scope="col"></th>
                        <th scope="col">Producto</th>
                        <th scope="col">Cantidad</th>
                        <th scope="col">Precio</th>
                      </tr>
                    </thead>
        </table>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      @else
        <p>Todavía no hiciste compraste nada. Dale, amigo!!</p>
      @endif
    </div>
  </div>
</div>
@endsection
