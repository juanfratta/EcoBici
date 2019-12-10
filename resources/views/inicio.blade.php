<!-- Chequeo de inicio de session -->
<?
if ($_GET["var"]==1){
  $var=1;
  session_start();
  $_SESSION["session"]==true;

  header ('location:chequeoInicio.php');
  header ('location:chequeoInicio.php?var='.$var);
}else {$var=0}


?>

<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/styleHome.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Playfair+Display&display=swap" rel="stylesheet">
    <title>ECO BICIS | Home</title>
  </head>
  <body>
  <div class="container.fluid">

<!--PRINCIPIO HEADER-->
    <header>
      <nav class="navbar navbar-expand-lg navbar-light bg-light" style="z-index: 1;">
      <a class="navbar-brand"style="color:white; font-size:40px;" href="inicio.php">EcoBici</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="inicio.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="registro.php">Registrarse</a>
          </li>
          <li class="nav-item">
           <a class="nav-link" href='loginB.php'>Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="FAQ.php">FAQs</a>
          </div>
    </nav>
    </header>
<!--FIN DE HEADER-->


  <main>

    <!--Acá empieza el slide-->
    <div class="slidePpal row" style="margin-right: 0px;margin-left: 0px;">
    <div class="slide col-12" style="padding-right: 0px;padding-left: 0px;">
      <div id="carouselPpal" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
          <img src="images/fondo.jpg" class="d-block w-100 100-h" alt="Hombre en bici bajo puente">
          <div class="carousel-caption d-none d-md-block">
              <h1>La mejor opción para movilizarte</h1>
              <p>Las bicis eléctricas son una opción económica y sustentable</p>
          </div>
      </div>
      <div class="carousel-item">
        <img src="images/imagen-slide-2.jpg" class="d-block w-100 100-h" alt="Pareja en bici en la ciudad">
        <div class="carousel-caption d-none d-md-block">
            <h1>El medio más ágil para desplazarte en la ciudad</h1>
            <p>Hasta 60km de autonomía para que puedas andar por horas.</p>
        </div>
      </div>
    </div>
      </div>
    </div>
    </div>
    <!-- Aca la seccion principal-->
    <div class="seccionPpal row" style="margin-right: 0px;margin-left: 0px;">
      <!--lista de productos-->
      <aside class="listaProductos col-md-2 d-none d-md-block">
        <h6>CATEGORIAS</h6>
        <ul>
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
      </aside>

<!--  SECCION DE PRODUCTOS DESTACADOS-->
  <section class="productosDestacados col-md-10 col-sm-12">
  <div class="row" id="tituloProductos">
    <div class="col-12"><h2>PRODUCTOS DESTACADOS</h2></div>
  </div>
  <div class="listabox row">

    <article class="cajaProducto col-lg-4 col-md-12">
        <a href="#" class="verProducto">Ver Más</a>
      <img src="images/bici1.jpg" alt="bicicleta electrica mountan bike">
      <h6 class="nombreProducto">Modelo: mountan bike</h6>
    </article>

    <article class="cajaProducto col-lg-4 col-md-12">
      <a href="#" class="verProducto">Ver Más</a>
      <img src="images/bici6.jpg" alt="bicicleta electrica dama">
      <h6 class="nombreProducto">Modelo: dama blanca</h6>
    </article>

    <article class="cajaProducto col-lg-4 col-md-12">
      <a href="#" class="verProducto">Ver Más</a>
      <img src="images/bici9.jpg" alt="bicicleta electrica urbana">
      <h6 class="nombreProducto">Modelo: urbana</h6>
    </article>

  </div>

  <div class="listabox row">

    <article class="cajaProducto col-lg-4 col-md-12 col-sm-12">
      <a href="#" class="verProducto">Ver Más</a>
      <img src="images/bici5.jpg" alt="bicicleta electrica mountan bike">
      <h6 class="nombreProducto">Modelo: mountan negra</h6>
    </article>

    <article class="cajaProducto col-lg-4 col-md-12 col-sm-12">
      <a href="#" class="verProducto">Ver Más</a>
      <img src="images/bici8.jpg" alt="bicicleta electrica urbana">
      <h6 class="nombreProducto">Modelo: paseo black</h6>
    </article>

    <article class="cajaProducto col-lg-4 col-md-12 col-sm-12">
      <a href="#" class="verProducto">Ver Más</a>
      <img src="images/bici7.jpg" alt="bicicleta electrica urbana">
      <h6 class="nombreProducto">Modelo: urbana premium</h6>
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




<!-- Comienzo footer-->
<footer class="row" style="margin-right: 0px;margin-left: 0px;">
    <div class="colFooter col-lg-4 col-md-12">
      <p>Dirección: Avenida Córdoba 2222
      <b>CABA</b> <br>
      <p>Tel: 15151-515515</p>
      <a href="mailto:consultas@ecobici.com.ar">consultas@ecobici.com.ar</a>
    </p>
    </div>
    <div class="colFooter col-lg-4 col-md-12">
      <p>Seguinos en nuestras redes</p>
      <a href="#"><img class="redes" src="images/icono-face.png" alt="facebook" width="35px;" height="35px;"></a>
      <a href="#"><img class="redes" src="images/icono-insta.png" alt="instagram" width="35px;" height="35px;"></a>
      <a href="#"><img class="redes" src="images/icono-wa.png" alt="whatsapp" width="35px;" height="35px;"></a>
    </div>
    <div class="colFooter col-lg-4 col-md-12 d-none d-md-block">
      <p class="textoDestacado">
        <i>Somos representantes exclusivos de las mejores marcas internacionales y ofrecemos garantía oficial.</i>
      </p>
    </div>
</footer>
<!--Fin del footer-->


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
