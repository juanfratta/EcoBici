<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ecobici</title>
    <link rel="stylesheet" href="css/styleTemplate.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--<link rel="stylesheet" href="css/bootstrap.css">-->
    <link rel="stylesheet" href="css/app.css">

    <link rel="stylesheet" href="css/styleTemplate.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display&display=swap" rel="stylesheet">


</head>
<body>
      <!--PRINCIPIO HEADER-->
       <header>
         <nav class="navbar navbar-expand-lg navbar-light bg-light" style="z-index: 1;">
         <a class="navbar-brand" style="color:white; font-size:40px;" href="inicio.php">EcoBici</a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarNav">
           <ul class="navbar-nav">
             <li class="nav-item active">
               <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
             </li>
             <li class="nav-item">
               <a class="nav-link" href="/register">Registrarse</a>
             </li>
             <li class="nav-item">
               <a class="nav-link" href="/login">Login</a>
             </li>
             <li class="nav-item">
               <a class="nav-link" href="/preguntas">FAQs</a>
             </li>
           </ul>
         </div>
       </nav>
       </header>

        <!-- FIN DEL HEADER-->

        <main class="py-4" style="background:white;">
            @yield('content')
        </main>



       <!-- FOOTER-->

       <footer class="row">
       <div id="foot1" class="colFooter col-lg-4 col-md-12">
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
       <div id="foot2" class="colFooter col-lg-4 col-md-12 d-none d-md-block">
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
