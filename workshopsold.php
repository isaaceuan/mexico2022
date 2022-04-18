<!doctype html>
<html class="no-js" lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/lightbox/css/lightbox.css">
    <script src="assets/lightbox/js/lightbox-plus-jquery.js"></script>
    <title>Talleres | Congreso Parques Guayaquil 2021</title>
    <?php  require("inc/head.php") ?>
</head>
<?php require ("inc/traductor.php"); ?>

  <header class="header h_talleres">
      <div class="hide-for-small-only">
        <?php include'inc/menu.php'; ?>
      </div>
      
    <div class="titulo_pagina">
      <div class="figure_header">
        <figure class="">
          <!-- <img src="img/iconos/i_talleres.png" alt=""> -->
        </figure>
      </div>
      <hgroup>
        <h2>Experiential and</h2>
        <h1>curricular workshops</h1>
      </hgroup>
    </div>
  </header>
  <button class="button__scroll--up"><span class="fi-arrow-up"></span></button>

<main class="">
    <div class="row"><br>
    <div class="column medium-12 texto_principal">
      <div class="column medium-9">
    <p class="">In the WUP Congress we will have experiential and curricular workshops. The +10 workshops will be held on November 14 and 16, prior to the educational sessions, keynote sessions and the Expo Parks. Snacks, transportation, materials and stationery are included.</p>
    </div>
    </div>
      <!-- <p class="rojo">*Importante: Al momento de realizar tu compra verificar que los 
        talleres no se lleven a cabo en el mismo horario.</p> -->
    </div>
    <section id="talleres">
      <div class="cinta_aqua ">
        <div class="row align-center">
          <h2>Experiential workshops</h2>
        </div>
        <div class="row column">
          <p>Visit the most emblematic parks in the city!</p>
        </div>
        <div class="row column">
          <h5>Investment: <span> $45 USD c/u.</span></h5>
        </div>
      </div>

      <div class="row talleres__back">
        <div class="column small-12 medium-6">
          <figure>
            <img src="img/fotos/talleres_vivenciales.jpg" alt="talleres vivenciales">
          </figure>
        </div>
        <div class="column small-12 medium-6 resumen_taller">

            <p>Get to know Monterrey and learn at the same time! In the experiential workshops you will learn about tourist attractions and citizen projects related to public space; There will be experts on the subject and collaborators from the host city who will share for 4 hours their experiences in the administration of these spaces, the challenges they have faced and the activities they have implemented.</p>
            <p><strong>At the end you will have a participation diploma.</strong></p>
            <div class="cupo_taller">
              <!-- <p>Cupo máximo: <span>60 personas por taller.</span> </p> -->
              <p>Inversión: <span>$45 USD c/u</span> </p>
            </div>
        </div>
      </div><br>
      <div class="">
        <?php
          require ("class/clases.php");
          $array_talleres = new Taller();
          $talleresV = $array_talleres->tallerVivencial($congreso);
          foreach ($talleresV as $valor) {
            echo '<hr>
            <div class="row taller">
              <div class="column small-12 medium-7 small-order-2 abstract_taller" id="'.$valor['id_taller'].'">
                <!--<a href="taller.php?taller='.$valor['id_taller'].'" > -->
                  <div>
                    <h5 class="titulo_taller">'.$valor["taller"].'</h5>
                    <span class="subtitulo_taller">'.$valor["subtitulo"].'</span><br>
                  </div>
                  <div>
                    <small><i class="fi-calendar"></i> '. $valor["fecha"].'</small> 
                    <small><i class="fi-clock"></i> '.$valor["inicio"].' a '.$valor["fin"].'</small>
                  </div>
                  <div class="descripcion_taller">';
                    $resumenTaller = $array_talleres->resumenTaller($valor["descripcion"]);
                    echo '<p>'.$resumenTaller.'</p>';
                    $imparte = $array_talleres->talleristaImparte($valor["id_taller"]);
                    foreach($imparte as $dato){
                      echo '<small><i class="fi-torso"></i> '.$dato["nombre"].' '.$dato["apellidos"].' </small> ';
                    }                                  
                    echo'
                  </div>
                </a>
              </div>
              
              <div class="column medium-3 small-12 img_talleres small-order-1">
                <figure>
                  <!--<a href="img/talleres/chipinque.jpg" data-lightbox="Talleres" data-title="Taller Parque Ecológico Chipinque">-->
                    <img src="https://www.congresoparques.com/img/uploads/leon/talleres/'.$valor["foto"].'" alt="" class="foto_taller">
                  <!--</a>-->
                </figure>
              </div>
              
            </div>';
          }
        ?>
      </div>

      <div class="cinta_aqua">
        <div class="row align-center">
          <h2>Curriculum workshops</h2>
        </div>
        <div class="row column">
          <p >Listen, learn, act, and improve the tools that every space needs!.</p>
        </div>
        <div class="row column align-center">
          <h5>Investment: <span>$60 USD c/u.</span><br>
         <!-- <h5>Inversión Virtual: <span>$39 USD c/u.</span></h5> -->
        </div>
      </div>
      <div class="row talleres__back">
        <div class="column small-12 medium-6">
          <figure>
            <img src="img/fotos/talleres_curriculares.png" alt="talleres vivenciales">
          </figure>
        </div>
        <div class="column small-12 medium-6">
            <p>If what you want is to obtain technical knowledge on a specialized topic, these workshops are for you. For 4 hours you will have the guidance of a specialist who will help you expand your knowledge and learn techniques on various topics in public space.</p>
            <p><strong>At the end you will have a participation diploma. </strong></p>
              <div class="cupo_taller">
                <!-- <p>Cupo máximo: <span>60 personas por taller.</span> </p> -->
                <p>Investment: <span>$60 USD c/u.</span><br>
                Investment: <span>$39 USD c/u.</span></p>
              </div>
        </div>
      </div><br>

      <div class="contenedor_taller">
        <?php
          $array_talleres = new Taller();
          $talleresV = $array_talleres->tallerCurricular($congreso);
          foreach ($talleresV as $valor) {

            echo '
            <div class="row taller">
              <div class="column small-12 medium-9">
                <div>
                  <h6 class="subtituloAvenirA">'.$valor["taller"].'</h6>
                  <span class="subtitulo_taller">'.$valor["subtitulo"].'</span>
                </div>
                <div class="descripcion_taller">
                  <p>'.$valor["descripcion"].'</p>
                  <!--<p class="tallerista"><strong>Tallerista:</strong> '.$valor["tallerista"].'</p>-->
                  <small>Fecha: '. $valor["fecha"].'</small>
                  <small>Horario: '.$valor["inicio"].' a '.$valor["fin"].'</small>
                </div>
              </div>
              <div class="column medium-3 small-12 img_talleres">
                <figure>                  
                  <img src="https://www.congresoparques.com/img/uploads/leon/talleres/'.$valor["foto"].'" alt="" class="foto_taller">                  
                </figure>
              </div>
            </div>
            ';
          }
         ?>

      </div>

    </section>

</main>

<?php include'inc/footer.php'; ?>
