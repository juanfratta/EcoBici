@extends('layouts.template')

@section('content')
<div class="container-fluid">
    <ul  style="color:red" class="errores">
        @foreach($errors->all() as $error)
        <li>
            {{$error}}
        </li>
        @endforeach
    </ul>

<form action="{{url('nuevoproducto')}}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}

    <div class="form-group">
        <label for="nombre" class="control-label">Nombre </label>
    <input type="text" name="nombre" class="form-control" value="{{old("nombre")}}">
    </div>
    <div class="form-group">
            <label for="precio_venta" class="control-label">Precio compra </label>
            <input type="number" name="precio_venta" class="form-control" value="{{old("precio_venta")}}">
    </div>
    <div class="form-group">
            <label for="precio_compra" class="control-label">Precio venta </label>
            <input type="number" name="precio_compra" class="form-control" value="{{old("precio_compra")}}">
    </div>
    <div class="form-group">
            <label for="stock" class="control-label">Stock</label>
            <input type="text" name="stock" class="form-control" value="{{old("stock")}}">
    </div>
    <div class="form-group">
            <label for="descripcion" class="control-label">Descripcion </label>
            <input type="text" name="descripcion" class="form-control" value="{{old("descripcion")}}">
    </div>
    <div class="">
            <label >Foto: </label>
            <input type="file" name="imagen">
    </div>
    <button type="submit" class="btn btn-default">
        Nuevo Producto
    </button>
</form>

</div>
@endsection
