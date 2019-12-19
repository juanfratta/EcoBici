@extends('layouts.template')

@section('content')

  <link rel="stylesheet" href="/css/FAQ.css">

       <div class="text-wrap text-justify  col-10 mx-auto seccionPreguntas">
         <img class="pt-5 rounded img-fluid" src="images/imagen-slide-2.jpg" alt="">

        <article class="preguntas">
           <h3>A CONTINUACION DATOS DEL TIEMPO PARA QUE DISFRUTAR MEJOR DE TU ECOBICI </h3>

           {{-- <p>Hora local: {{(($clima["time"][8]).($clima["time"][9]).':'.($clima["time"][10).($clima["time"][11]))  }}</P> --}}


          <p>Hora local: {{($clima["time"][11]).($clima["time"][12]).(":").($clima["time"][14]).($clima["time"][15])}}</P>
           <p></P>
             <P>Estado del clima para pasear: {{($clima["consolidated_weather"][0][ "weather_state_name"])}}</P>
           <p></P>

           <P>Temperatura mínima : {{($clima["consolidated_weather"][0][ "min_temp"])." °C"}}</P>
           </P>
           <P>Temperatura máxima: {{($clima["consolidated_weather"][0][ "max_temp"])." °C"}}</P>
           </P>
           <P>probabilidad de lluvia: {{($clima["consolidated_weather"][0][ "predictability"]." %")}}</P>

       </div>


     @endsection
