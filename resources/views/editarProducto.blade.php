
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


        <form action="" method="POST" enctype="multipart/form-data">
      @csrf
    <div class="row col-12">
        <div class="form-group col-6">
                <label for="nombre" class="control-label">Nombre </label>
                <input type="text" name="nombre" class="form-control" value="{{$producto->nombre}}">
        </div>
        <div class="form-group col-2">
                <label for="precio" class="control-label">Precio </label>
                <input type="number" name="precio" class="form-control" value="{{$producto->precio}}">
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
            <div class="col-4">
                <div class=" col-12 pt-3">
                    <label class="col-12 pl-0 pt-2" >Fotografia del producto: </label>
                    <input class="" type="file" name="imagen" value="{{$producto->imagen}}">
                </div class="col-4">
            </div>
    </div>
    <div style="padding-left:27px" class="row col-12">
        <button type="submit" class="btn btn-success btn-lg"  >
                Confirmar
        </button>
        <a style="margin-left:15px " href="/productos" class="btn btn-Secondary btn-lg active" role="button" aria-pressed="true">Regresar </a>

</div>
</form>

</div>
</div>

@endsection
