@extends('layouts.template')

@section('content')


  <link rel="stylesheet" href="/css/styleHome.css">

  <main>
 
    <!--Acá empieza el slide-->
    <div class="slidePpal row" style="margin-right: 0px;margin-left: 0px;">
    <div class="slide col-12" style="padding-right: 0px;padding-left: 0px;">
      <div id="carouselPpal" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
          <img src="images/fondo.jpg" class="d-block w-100 100-h" alt="Hombre en bici bajo puente">
          <div class="carousel-caption d-none d-md-block">
              <h1>La mejor opción para movilizarte en la ciudad</h1>
              <p>Las bicis eléctricas un medio ágil y sustentable</p>
          </div>
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
      <!--lista de productos-->
    <!--<aside class="listaProductos col-md-2 d-none d-md-block">
        <h6>CATEGORIAS</h6>
          <!--<ul>
          <li><a href="#">Biciletas</a> </li>
          <li><a href="#">Monopatines</a> </li>
          <li><a href="#">Kits</a> </li>
          <li><a href="#">Accesorios</a> </li>
          <li><a href="#">Repuestos</a> </li>
        </ul>
        <div class="mediosDePago">
          <h6>MEDIOS DE PAGO</h6>
          <ul>
            <li><a href="#"><img src="images/visa.png" alt="visa" width="30px;" height="20px;"></a></li>
            <li><a href="#"><img src="images/amex.png" alt="amex" width="30px;" height="20px;" > </a> </li>
            <li> <a href="#">Débito</a></li>
            <li id="efectivo"> <a href="#">Efectivo 10 % OFF</a></li>
          </ul>

        </div>
      </aside>-->

<!--  SECCION DE PRODUCTOS DESTACADOS-->
  <section class="productosDestacados container">
  <div class="row" id="tituloProductos">
    <div class="col-12"><h2>NUESTRAS BICIS!</h2></div>
  </div>
  <div class="listabox row">

 <!--PRODUCTO-->

    <article class="cajaProducto col-lg-4 col-md-12">

      <div class="cont-botones">

        <a href="#openModal" class="verProducto">Ver Más</a>
        <a href="#" class="comprar">Comprar</a>
      </div>

      <img src="images/bici1.jpg" alt="bicicleta electrica mountan bike">

      <h6 class="nombreProducto">Mountain bike</h6>

    <!--MODAL-->

      <div id="openModal" class="modalDialog">

          <div>
        		<a href="#close" title="Close" class="close">X</a>
        		<h2>modelo de la bici</h2>
            <img src="images/bici1.jpg" alt="bicicleta electrica mountan bike">
        		<h3>$50.000</h3>
        		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        	</div>
        </div>
    </article>

  </div>
    </section>
  </div>
</main>
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
      <img src="images/bh-1.png" alt="loho bh">
      <img src="images/benelli.png" alt="logo benelli">
      <img src="images/giant.png" alt="logo giant">
      <img src="images/bold.png" alt="logo bold">

    </div>
</div>

@endsection
