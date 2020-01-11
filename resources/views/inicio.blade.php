@extends('layouts.template')

@section('content')

  <link rel="stylesheet" href="/css/styleHome.css">


  <div>

    <!--Acá empieza el slide-->
    <div class="slidePpal row" style="margin-right: 0px;margin-left: 0px;">
    <div class="slide col-12" style="padding-right: 0px;padding-left: 0px;">
      <div id="carouselPpal" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
          <a href="#"> <img src="images/fondo.jpg" class="d-block w-100 100-h" alt="Hombre en bici bajo puente">
          <div class="carousel-caption d-none d-md-block">
              <h1>La mejor opción para movilizarte en la ciudad</h1>
              <p>Las bicis eléctricas un medio ágil y sustentable</p>
          </div>
          </a>
      </div>
      <div class="carousel-item">
        <img src="images/imagen-slide-2.jpg" class="d-block w-100 100-h" alt="Pareja en bici en la ciudad">
        <div class="carousel-caption d-none d-md-block">
            <h1>Hasta 60km de autonomía para andar por horas</h1>
            <p>Con una simple carga llegás a donde quieras. Mientras pedaleas también se carga la batería.</p>
        </div>
      </div>
    </div>
      </div>
    </div>
    </div>
    <!-- Aca la seccion principal-->
    <div class="seccionPpal row" style="margin-right: 0px;margin-left: 0px;">

<!--  SECCION DE PRODUCTOS DESTACADOS-->
  <section class="productosDestacados container">
  <div class="row" id="tituloProductos">
    <div class="col-12"><h2> NUESTRAS BICIS!</h2></div>
  </div>
  <div class="listabox row">


 <!--PRODUCTO-->
 @forelse ($productos as $producto)

      <article class="cajaProducto col-lg-4 col-md-12">

        <div class="cont-botones">

        <a href="#openModal{{$producto->id}}" class="verProducto">Ver Más</a>


          @guest
            <a href="/login" class="comprar">Agregar</a>

          @else
                  <form action="{{route('addProductToCart', ['productId'=>$producto->id])}}" method="post">
                    @csrf
                    <input type="hidden" name="id" value="{{$producto->id}}">
                    <button class="boton-agregar" type="submit" name="button">Agregar</button>

                    <select id="count" name="count">
                      @for ($i=1; $i <= 10; $i++)
                        <option value="{{$i}}">{{$i}}</option>

                      @endfor

                    </select>
                  </form>
          @endguest

        </div>

      <img src="/storage/{{$producto->imageUrl}}">

      <h6 class="nombreProducto">{{$producto["name"]}}</h6>

      <!--MODAL-->

            <div id="openModal{{$producto->id}}" class="modalDialog">
                <div>
                	<a href="#close" title="Close" class="close">X</a>
                	<h2>{{$producto["nombre"]}}</h2>
                  <img src="/storage/{{$producto->imageUrl}}">
                	<h3 style="color:orange"><b>${{$producto["price"]}}</b></h3>
                	<p>{{$producto["description"]}}</p>
              	</div>
              </div>


    </article>
  @empty
  <td>No hay articulos para mostrar</td>
  @endforelse



  </div>
  <div class="paginate">
    {{$productos->links()}}
  </div>

    </section>
  </div>
</div>
<div class="row"style="margin-right: 0px;margin-left: 0px;">
    <div class="textoDestacado col-lg-6 col-md-12" style="background:black;">
      <h6>¿Por qué elegir una bici eléctrica?</h6>
      <ul>
        <li>Es más económica que cualquier otro medio de transporte. </li>
        <li>Siempre tenés la opción de elegir hacer ejercicio. </li>
        <li>Es un medio ágil para desaplazarse en la ciudad. </li>
        <li>Tiene 0 emisiones y no contamina el medio ambiente. </li>
        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </li>
      </ul>

    </div>
    <div class="marcas col-lg-6 col-md-12">
      <h5>Nuestras marcas</h5>
      <img src="images/marcas/bh-1.png" alt="loho bh">
      <img src="images/marcas/benelli.png" alt="logo benelli">
      <img src="images/marcas/giant.png" alt="logo giant">
      <img src="images/marcas/bold.png" alt="logo bold">

    </div>
</div>

@endsection
