
@extends('layouts.template')
<link rel="stylesheet" href="/css/productos.css">

@section('content')
<div class="container-fluid mt-3">
<div >
    <ul  style="color:red" class="errores">
        @foreach($errors->all() as $error)
        <li>
            {{$error}}
        </li>
        @endforeach
    </ul>

    {{-- <form action="update/{{'$producto->id'}}" method="POST" enctype="multipart/form-data"> --}}
        {{-- {{ csrf_field() }} --}}
        <form action="" method="POST" enctype="multipart/form-data">
      @csrf
    <div class="row col-12">
        <div class="form-group col-6">
                <label for="nombre" class="control-label">Nombre </label>
                <input type="text" name="nombre" class="form-control" value="{{$producto->nombre}}">
        </div>
        <div class="form-group col-2">
                <label for="precio_compra" class="control-label">Precio compra </label>
                <input type="number" name="precio_compra" class="form-control" value="{{$producto->precio_compra}}">
        </div>
        <div class="form-group col-2">
                <label for="precio_venta" class="control-label">Precio venta </label>
                <input type="number" name="precio_venta" class="form-control" value="{{$producto->precio_compra}}">
        </div>
        <div class="form-group col-2">
                <label for="stock" class="control-label">Stock</label>
                <input type="text" name="stock" class="form-control" value="{{$producto->stock}}">
        </div>
    </div>
    <div class="row col-12">
            <div class="form-group col-8">
                    <label for="descripcion" class="control-label">Descripcion </label>
                    <textarea type="text" name="descripcion" class="form-control" value="{{$producto->descripcion}}" rows="12"></textarea>
            </div>
            <div class=" col-4 pt-3">
                    <label class="col-12 pl-0 pt-2" >Fotografia del producto: </label>
                    <input class="" type="file" name="imagen">
            </div>

    </div>
    <div style="padding-left:27px" class="row col-12">
        <button type="submit" class="btn btn-success"  value="{{$producto->imagen}}">
                xConfirmar
        </button>
</div>
<a href="/productos" class="btn btn-default">Regresar</a>
</form>
</div>
</div>

@endsection
