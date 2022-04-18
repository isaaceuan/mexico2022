<!doctype html>
<html class="no-js" lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programa Completo | Congreso Parques Guayaquil 2021</title>
    <?php  require("inc/head.php");
          require("class/clases.php");
          $listaBloque = new Programa();
          ?>
    <!-- <link rel="stylesheet" href="css/foundation.css"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- SCRIPT PERSONALIZADO DE BOTONES DE PROGRAMA -->
    <!-- <script src="js/OcultaryVisualizar.js"></script> -->

  </head>
  <body>
    <?php include'inc/menu_resp.php'; ?>

<button class="button__scroll--up"><span class="fi-arrow-up"></span></button>
<?php require ("inc/traductor.php"); ?>

<div class="hide-for-small-only">
      <?php include('inc/menu.php'); ?>
    </div>


  <header class="header h_acerca_de">
   
      <div class="titulo_pagina_nuevo row">
        <hgroup class="column contenedor__titulo">
          <h1>FREQUENTLY</h1>
          <h2>ASKED QUESTIONS</h2>
          <!-- <h2>MONTERREY, NUEVO LEON</h2> -->
          <img src="img/linea verde.png" alt="">
          <p>A specialized event of educational and experiential content, aimed <br> at public space professionals and urban parks</p>
        </hgroup>
        <div class="centrar">
        <?php
$bloque = $listaBloque->botones(); 
echo $bloque
?>
    <input type="button" value="Complete Program" id="mostrar_todo"class="btn_programa btn_2"/>
        </div>
      </div>
  </header>
    <main id="contenido_programa"> 

<div class="row">
<?php
$bloque = $listaBloque->contendorPrograma(); 
echo $bloque
?>

      
  </div>

                <script>
                $(document).ready(function(){
                    $("#taller").click(function(){
                        $(".taller").fadeToggle();
                      });
                });
              </script>
              <section class="taller">
                <div class="lista_talleres">
                <ul>
                  <?php  $talleres = $listaBloque->talleres("2021-05-03", "16:00:00", "18:00:00", $congreso);
                        foreach ($talleres as $valor) {
                           echo "<li>".$valor['taller']." " .$valor['subtitulo']."</li>";
                           $resumen = $listaBloque->resumen($valor['descripcion']);
                           echo "<p class='resumen'>".$resumen." <small><a href='#' data-open='t".$valor['id_taller']."'>ver más</a></small></p>";
                      }
                  ?>
                </ul>
              </div>
              </section>

    <!-- <div class="row column align-center">
      <a href="assets/ProgramaPreliminar2019.pdf"><img src="img/programa_preliminar_2019.png"></a>
    </div> -->

  </main>


  <?php
  $datosTaller = $listaBloque->taller($congreso);
  foreach ($datosTaller as $valor) {
  echo "<div class='reveal emergente' id='t".$valor['id_taller']."' data-reveal>
        <figure class='text-center'><img src='https://www.congresoparques.com/img/uploads/leon/talleres/".$valor['foto']."'></figure>
        <h4 class='text-center'>".$valor['taller']." " .$valor['subtitulo']."</h4>
        <p >".$valor['descripcion']."</p>
        <small>Fecha: ".$valor['fecha']."</small>
        <small>Horario: de ".$valor['inicio']." a ".$valor['fin']." </small>
        <small>Capacidad: ".$valor['capacidad']." personas.</small>
        <button class='close-button' data-close aria-label='Close modal' type='button'>
        <span aria-hidden='true'>&times;</span>
        </button>
        </div>";
  }

  $datosConferencia = $listaBloque->datosConferencia();
  foreach ($datosConferencia as $valor) {
    echo "<div class='reveal emergente' id='conf".$valor['id_conferencia']."' data-reveal>
          <h4 class='text-center'>".$valor['conferencia']."</h4>
          <p >".$valor['descripcion']."</p>
          <small>Fecha: ".$valor['fecha']."</small>
          <small>Horario: de ".$valor['inicio']." a ".$valor['fin']." </small>
          <small>Lugar: ".$valor['salon']."</small>
          <button class='close-button' data-close aria-label='Close modal' type='button'>
          <span aria-hidden='true'>&times;</span>
          </button>
          </div>";
    }

 ?>

  <?php include'inc/sponsor.php'; ?>
    <?php include'inc/entries.php'; ?>



<?php include 'inc/footer.php'; ?>
