@extends('layouts.template')

@section('content')


  <div class="container">
    <div class="row form-carrito">
      <div class="carrito col-md-8">

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
        <div class="form-group col-6">
                <label for="precio" class="control-label">Precio </label>
                <input type="text" name="precio" class="form-control" value="{{$producto->precio}}">
        </div>
    </div>
    <div class="row col-12">
            <div class="form-group col-12">
                    <label for="descripcion" class="control-label">Descripcion </label>
                    <textarea type="text" name="descripcion" class="form-control" value="{{$producto->descripcion}}">
                    </textarea>
            </div>

                </div>

    <div class="col-6" >
      <label>Fotografia del producto: </label>
      <input class="" type="file" name="imagen" value="{{$producto->imagen}}">

    </div>

    <div class="row col-12">
        <button type="submit" class="btn btn-success"> Confirmar </button>
        <a style="margin-left:15px " href="/productos" class="btn btn-Secondary btn-lg active" role="button" aria-pressed="true"> Regresar </a>
    </div>
</form>

</div>
</div>
</div>

@endsection
