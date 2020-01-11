@extends('layouts.template')


@section('content')


<div class="row justify-content-center">
<div class=" card col-6 " style="margin: 50px; padding-left: 0px;padding-right: 0px;" >

<div class="card-header "> <h5>SUBIR PRODUCTO</h5></div>

    <div class="card-body">



    <ul  style="color:red" class="errores">
        @foreach($errors->all() as $error)
        <li>
            {{$error}}
        </li>
        @endforeach
    </ul>

          <form action="{{url('nuevoproducto')}}" method="POST" enctype="multipart/form-data">
            @csrf

          <div class="row col-12">
              <div class="col-6">
                  <label for="nombre" class="control-label">Nombre </label>
              <input type="text" name="name" class="form-control" value="{{old("name")}}">
              </div>
              <div class="col-2">
                      <label for="precio" class="control-label">Precio</label>
                      <input type="text" name="price" class="form-control" value="{{old("price")}}">
              </div>
          </div>
          <div class="row col-12">
                  <div class="col-12">
                          <label for="descripcion" class="control-label">Descripcion </label>
                          <textarea type="text" name="description" class="form-control textArea" id="texto" value="{{old("description")}}" rows="12"></textarea>
                  </div>
                  <div class="">
                          <label class="col-12 " >Imagen: </label>

                          <input class="" type="file" name="imageUrl">
                  </div>
                  </div>
                  <div style="" class="col-12">
                          <button id="boton" type="submit" class="btn btn-primary">
                                  Subir producto
                          </button>
                  </div>

          </form>
</div>
</div>
</div>

<script src="/js/validar.js"></script>

@endsection
