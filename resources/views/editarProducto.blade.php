@extends('layouts.template')

@section('content')

<div class="container-fluid">

        <form action="update/{{'$producto->id'}}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}

            <div class="form-group">
                <label for="nombre" class="control-label">Nombre </label>
            <input value="{{$producto->nombre}}" type="text" name="nombre" class="form-control">
            </div>
            <div class="form-group">
                    <label for="precio_venta" class="control-label">Precio compra </label>
                    <input  value="{{$producto->precio_venta}}" type="number" name="precio_venta" class="form-control">
            </div>
            <div class="form-group">
                    <label for="precio_compra" class="control-label">Precio venta </label>
                    <input value="{{$producto->precio_compra}}" type="number" name="precio_compra" class="form-control">
            </div>
            <div class="form-group">
                    <label for="stock" class="control-label">Stock</label>
                    <input value="{{$producto->stock}}" type="text" name="stock" class="form-control">
            </div>
            <div class="form-group">
                    <label for="descripcion" class="control-label">Descripcion </label>
                    <input value="{{$producto->descripcion}}" type="text" name="descripcion" class="form-control">
            </div>
            <div class="">
                    <label >Foto: </label>
                    <input type="file" name="imagen">
            </div>
            <button type="submit" class="btn btn-default">
                Confirmar cambios
            </button>
            <a href="/productos" class="btn btn-default">Regresar</a>

        </form>

</div>
@endsection

