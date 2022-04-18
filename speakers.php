<!doctype html>
<html class="no-js" lang="es" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Conferencistas y Ponentes | Congreso Parques Guayaquil 2020</title>
  <?php  require("inc/head.php") ?>
<body>
<?php include'inc/menu_resp.php'; ?>

<button class="button__scroll--up"><span class="fi-arrow-up"></span></button>
<?php require ("inc/traductor.php"); ?>
<?php require ("class/clases.php"); ?>

<div class="hide-for-small-only">
      <?php include('inc/menu.php'); ?>
    </div>


  <header class="header h_acerca_de">
   
      <div class="titulo_pagina_nuevo row">
        <hgroup class="column contenedor__titulo">
          <h1>SPEAKERS</h1>
          <!-- <h2>MONTERREY, NUEVO LEON</h2> -->
          <img src="img/linea verde.png" alt="">
          <p>A specialized event of educational and experiential content, aimed <br> at public space professionals and urban parks</p>
        </hgroup>
      </div>
  </header>
<main id="ponentes"><br>
<div class="row align-center">
  <small>*Susceptible to change </small>
  </div>
  <div class="row column">
    <!-- <p class="descripcion_principal text-center">- Más de 40 ponentes invitados al Congreso Internacional de Parques Urbanos Sudamérica -</p> -->
    
  </div>
  <div class="row ">
    <div class="column medium-7">
    <h4 class="subtituloAvenirA">Keynote Speakers</h4>
    <p><b>The most recognized players in our industry worldwide</b></p>
    <p>These speakers will share their professional experiences with all attendees. The most attractive topics and success stories and best practices will be unveiled at the Keynote Conferences.</p>
  </div>
  </div>
  <section class="row contenedor_magistrales align-center">
    <?php
      $ponentes = new Conferencistas();
      $lista_ponentes = $ponentes->magistrales($congreso);
      foreach ($lista_ponentes as $valor) {
        $html = "
                <figure class='column medium-2 small-12 contenido_conferencista'>
                  <img src='img/uploads/".$valor['foto']."'>
                  <figcaption>
                  <a href='conferencista.php?id=".$valor["id_conferencista"]."'>
                    <h1>".$valor['nombre']." ".$valor['apellidos']."</h1>
                  </a>
                  <h2>".$valor['cargo']."</h2>
                  <h4>".$valor['empresa']."</h4>
                  <hr>
                  <h3>".$valor['ciudad']. " ".$valor['pais']."</h3>
                  </figcaption>
                </figure>
                ";
        echo $html;
      }
     ?>
  </section>
  <div class="row imghr">
<div class="column small-12">
         <img class="linea" src="img/linea gris.png" alt="">
</div>
</div>
  <div class="row">
  <div class="column medium-7">
    <h4 class="subtituloAvenirA">Educational Sessions</h4>
    <h5 class="subtituloAvenirB">More than 40 educational sessions with great national and international speakers</h5>
    <p>They will be the designated time for learning and training. Based on their area of specialization and topic of interest, the attendee will be able to select 1 of the 4 simultaneous educational sessions in which to participate.</p>
    <p><b> - Check days and times of the sessions in our Final Program. </b></p>
  </div>
  </div>
  <section class="row contenedor_educativas align-center">
    <?php
      $ponentes = new Conferencistas();
      $lista_sesionesE = $ponentes->sesionesEducativas($congreso);
      foreach ($lista_sesionesE as $valor) {
        $html = "
                <figure class='column medium-2 small-12 contenido_conferencista'>
                  <img src='../../img/uploads/leon/conferencistas/".$valor['foto']."'>
                  <figcaption>
                  <a href='conferencista.php?id=".$valor["id_conferencista"]."'><h1>".$valor['nombre']." ".$valor['apellidos']."</h1></a>
                  <h2>".$valor['cargo'].",
                  ".$valor['empresa']."</h2>
                  <h3>".$valor['ciudad']. ", ".$valor['pais']."</h3>
                  </figcaption>
                </figure>
                ";
        echo $html;
      }
     ?>
  </section><br>
  <div class="row imghr">
<div class="column small-12">
         <img class="linea" src="img/linea gris.png" alt="">
</div>
</div>
<div class="row">
  <div class="column medium-7">
    <h4 class="subtituloAvenirA">Worshopers</h4>
    <h5 class="subtituloAvenirB">The + 15 workshops will be held on November 14 and 15.</h5>
    <p>Meet the national and international professionals who will teach the great curricular and experiential workshops.</p>
  </div>
  </div>
  <section class="row contenedor_educativas align-center">
    <?php
      $talleristas = new Taller();
      $lista_talleristas = $talleristas->talleristas($congreso);
      foreach ($lista_talleristas as $valor) {
        $html = "
                <figure class='column medium-2 small-12 contenido_conferencista'>
                  <img src='../../img/uploads/leon/talleristas/".$valor['fotografia']."'>
                  <figcaption>
                  <h1>".$valor['nombre']." ".$valor['apellidos']."</h1>
                  <h2>".$valor['cargo'].",
                  ".$valor['empresa']."</h2>
                  </figcaption>
                </figure>
                ";
        echo $html;
      }
     ?>
  </section><br>
  <!-- <div class="row column">
    <h4 class="subtituloAvenirA">And many More....</h4>
  </div> -->
</main>

<br>



    <?php include'inc/sponsor.php'; ?>
    <?php include'inc/entries.php'; ?>


<?php include'inc/footer.php'; ?>
