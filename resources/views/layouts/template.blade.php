<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ecobici</title>
    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/styleTemplate.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/styleHome.css">


  </head>
<body>
      <!--PRINCIPIO HEADER-->
       <header>

         <nav class="navbar navbar-expand-lg navbar-light bg-light" style="z-index: 1;">
         <a class="" href="/"><img src="/images/logo.png" alt="EcoBici" width="150px;"></a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarNav" style="text-align:right;">
           <ul class="navbar-nav">


             <li class="nav-item active">
               <a class="nav-link" href="/"><img  src="/images/iconos/home.png" alt="home" width="30px;">
               </a>
             </li>

             @auth
               <li class="nav-item">
                 <a class="nav-link" href="/carrito"><img  src="/images/iconos/carrito.png" alt="carrito" width="30px;">
                 </a>
               </li>
               <li class="nav-item">
                 <a class="nav-link" href="/nuevoproducto"><img  src="/images/iconos/flecha.png" alt="subir producto" width="18px;">
                 </a>
               </li>
               <li class="nav-item">
                 <a class="nav-link" href="/productos"><img  src="/images/iconos/producto.png" alt="subir producto" width="35px;">
                 </a>
               </li>
             @endauth


             <li class="nav-item">
               <a class="nav-link" href="/preguntas"><img src="/images/iconos/signo.png" alt="preguntas frecuentes" width="30px;">
               </a>
             </li>

             @guest
                 <li class="nav-item">
                     <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                 </li>
                 @if (Route::has('register'))
                     <li class="nav-item">
                         <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                     </li>
                 @endif

             @else
                 <li class="nav-item dropdown">
                     <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="te" aria-expanded="false" v-pre>
                         <img src="/storage/{{auth::user()->avatar}}" class="avatarPerfil" style="width:30px;"> <span class="caret"></span>
                     </a>

                     <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                         <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                             {{ __('Logout') }}
                         </a>
                         <a href="perfil" style="">Editar perfil</a>

                         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                             @csrf
                         </form>
                     </div>
                 </li>

             @endguest
             </ul>
         </div>
       </nav>
       </header>

        <!-- FIN DEL HEADER-->

        <main class="" style="background:white;">
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
         <a href="#"><img class="redes" src="/images/iconos/icono-face.png" alt="facebook" width="35px;" height="35px;"></a>
         <a href="#"><img class="redes" src="/images/iconos/icono-insta.png" alt="instagram" width="35px;" height="35px;"></a>
         <a href="#"><img class="redes" src="/images/iconos/icono-wa.png" alt="whatsapp" width="35px;" height="35px;"></a>
       </div>


  <div id="foot2" class="colFooter col-lg-4 col-md-12 d-none d-md-block">


    @php
    $url="https://www.metaweather.com/api/location/468739/";
    $clima= json_decode(file_get_contents($url), true)
    @endphp

    <P>Clima: {{($clima["consolidated_weather"][0][ "weather_state_name"])}}</P>

    <P>Temperatura: {{($clima["consolidated_weather"][0][ "the_temp"])." °C"}}</P>

    <P>Prob. lluvia: {{($clima["consolidated_weather"][0][ "predictability"]." %")}}</P>

  </div>
</footer>
   <!--Fin del footer-->
</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>
