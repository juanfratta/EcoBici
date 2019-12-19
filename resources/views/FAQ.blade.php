@extends('layouts.template')

@section('content')

  <link rel="stylesheet" href="/css/FAQ.css">

       <div class="text-wrap text-justify  col-10 mx-auto seccionPreguntas">
         <img class="pt-5 rounded img-fluid" src="images/imagen-slide-2.jpg" alt="">

        <article class="preguntas">
           <h3>¿Qué es una bicicleta eléctrica?</h3>
           <p>En Argentina se considera una bicicleta eléctrica a aquellos vehículos
          con pedales y equipados con un motor eléctrico auxiliar que tengan una
           potencia nominal continua máxima de 0,25 kilovatios. La potencia debe disminuir
           progresivamente y finalmente interrumpirse cuando la velocidad del vehículo
           alcance los 25 km/h, o antes.
           </p>
         </article>
         <article class="preguntas">
          <h3>¿Como funciona una bici eléctrica?</h3>
           <p>Las bicicletas eléctricas incorporan un Sistema de Pedaleo Asistido (también denominado P.A.S. o Pedelec).
          Este sistema se activa mediante un sensor que determina la fuerza de nuestro pedaleo,
           trasmitiendo esta información a un motor para que éste ayude al avance de la bicicleta.
           Cuando se deja de pedalear o se acciona el freno, el motor deja de funcionar.
          Necesitan un tiempo de carga de entre 2-8 horas dependiendo el modelo.
           </p>
         </article>

         <article class="preguntas">
           <h3>¿Cuál es la velocidad y autonomía alcanzan?</h3>
           <p>Dependiendo del modelo de bicicleta eléctrica, la velocidad varía desde los 25Kms/h hasta los 40Kms/h, e incluso más.
             La autonomía también varía considerablemente según el tipo de batería instalada en la bicicleta.
             Existen dispositivos de recarga cuando la bicicleta rueda. POr tanto, hay bicicletas eléctricas capaces de sobrepasar los 140 Kms,
             aunque la autonomía típica es de unos 35-60 Kms.
           </p>
         </article>
         <article class="preguntas">
           <h3>¿Cuál es la vida útil de una batería?</h3>
           <p>Esta es una de las preguntas frecuentes más habituales. Las baterías están sujetas a desgaste: con el paso del tiempo nuestra batería podrán almacenar menos electricidad (y se cargarán mas rápidamente) y por lo tanto tendrán menos autonomía. Este proceso químico de desgaste, que empieza desde el momento de su fabricación, aumenta con su uso. En internet encontramos sitios donde hablan de un numero concreto de recargas (500 o 1.000): Esta información induce al error, ya que es obvio que usar una batería 50 veces al año, no significa que la batería dure 10 o 20 años. La duración de una batería como termino medio son los dos años. Habrá algunas personas que querrán un batería nueva antes de los dos años y otros que la llevaran hasta el final.
           </p>
         </article>

         <article class="preguntas">
          <h3>¿Cuál es el coste de una batería?</h3>
           <p>Las baterías de las bicicletas eléctricas, aunque su precio
             pueda parecer alto, en comparación con otras baterías (portátil,
              móviles etc) que se venden en el mercado, son bastante baratas.
               Una batería de iones de litio de una e-bike puede costar $5.000.
           </p>
         </article>

         <article class="preguntas">
        <h3>¿Motor delantero o trasero?</h3>
           <p>Esta es una de las preguntas más dificiles de responder.
             Depende del uso que le demos. El motor delantero nos da la
             ventaja de no poseer engranajes internos y equilibrar mejor los
              pesos de la bicicleta electrica. Es recomendable para la ciudad
              y trayectos con poca pendiente. Sin embargo si el uso va a ser
              en parte recreacional, la tracción trasera nos dará mayor libertad.
           </p>
         </article>

         <article class="preguntas">
          <h3>¿Son las baterías perjudiciales para el medio ambiente? </h3>
           <p>Una vez finalizado el ciclo de vida de la batería, deberemos
             depositarla correctamente en los puntos indicados de reciclaje,
             servicios municipales de limpieza, empresas de reciclaje o empresa
             de desguace de vehículos, que tratarán los residuos de una manera
             correcta y no dañina para el medio ambiente. Las baterías de silicona
             por ejemplo se pueden reciclar como fertilizante. Las materias primas
             de los diferentes tipos de baterías tienen gran valor y se utilizan para la fabricación de baterías nuevas.
           </p>
         </article>

         <article class="preguntas">
          <h3>¿Las bicicletas eléctricas no contaminan?</h3>
           <p>La implementación de energías limpias y renovables se persigue en paralelo
             al despliegue de los vehículos eléctricos. Actualmente en América Latina casi
             un 17% de la electricidad que se genera viene de energías renovables y el porcentaje
             va en aumento. Una moto de combustión produce un 100% de energía sucia.
           </p>
         </article>

         <article class="preguntas">
           <h3>¿Cuáles son las normas para circular con una bicicleta eléctrica?</h3>
           <p>En Argentina no está aún reglametado, pero aún no necesitas permiso ni seguro porque
             éstas se rigen por las mismas directrices que las bicis convencionales.
             Por tanto podrás circular por carriles bicis, incluso circular por las aceras en
             aquellos lugares donde se permita. Por no hablar de las sendas de montaña, playas, etc.
             De todas maneras, siempre recomendamos el uso de un casco de seguridad homologado.

           </p>
         </article>

         <article class="preguntas">
          <h3>¿Es verdad que una bicicleta eléctrica permite ahorrar dinero?</h3>
           <p>Por supuesto que sí. De manea obvia, si sustituimos los desplazamientos
             de cualquier otro vehículo, la bicicleta eléctrica nos permitirá ahorrar dinero.
              Por norma general se considera que el consumo cada 100 km es aproximadamente de 1kw/h.
           </p>
         </article>

         <article class="preguntas" id="ultimaPregunta">
           <h3>¿Es un buen momento para comprar una bicicleta eléctrica?</h3>
           <p>Aunque es evidente que la tecnología no deja de avanzar y siempre las mejoras que
             podemos observar en los circuitos especializados nos parecen significativas;
             hemos de tener en cuenta que las bicicletas eléctricas incorporan la mejor experiencia
              y tecnología adquirida por los años en uso de la bicicleta convencional
              y que los componentes eléctricos son cada vez mejores y mas baratos.
              Cualquier momento es bueno.
           </p>
          </article>

       </div>

     @endsection
