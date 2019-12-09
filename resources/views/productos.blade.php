@extends('layouts.template')

@section('content')


<form action="{{url('productos')}}" method="POST">
    {{ csrf_field() }}

    <div class="form-group">
        <label for="nombre" class="control-label">Nombre </label>
        <input type="text" name="nombre" class="form-control">
    </div>
    <div class="form-group">
            <label for="precio_venta" class="control-label">Precio compra </label>
            <input type="number" name="precio_venta" class="form-control">
    </div>
    <div class="form-group">
            <label for="precio_compra" class="control-label">Precio venta </label>
            <input type="number" name="precio_compra" class="form-control">
    </div>
    <div class="form-group">
            <label for="stock" class="control-label">Stock</label>
            <input type="text" name="stock" class="form-control">
    </div>
    <div class="form-group">
            <label for="descripcion" class="control-label">Descripcion </label>
            <input type="text" name="descripcion" class="form-control">
    </div>

    <button type="submit" class="btn btn-default">
        Nuevo Producto
    </button>
</form>
