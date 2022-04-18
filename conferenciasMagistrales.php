<!doctype html>
<html class="no-js" lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conferencias Magistrales | Congreso Parques Guayaquil 2020</title>
    <?php require("inc/head.php") ?>
</head>
<body>
<button class="button__scroll--up"><span class="fi-arrow-up"></span></button>
<?php require ("inc/traductor.php"); ?>
<?php include'inc/menu.php'; ?>

  <header class="header h_magistral">
    <div class="hide-for-small-only">
    </div>
    <div class="titulo_pagina">
      <div class="figure_header">
        <figure class="">
          <img src="../img/iconos/sudamerica/i_magistrales_web.png" alt="">
        </figure>
      </div>
      <hgroup>
        <h2>KEYNOTE</h2>
        <h1>SESSIONS</h1>
      </hgroup>
    </div>
  </header>
<main id="conferencias_magistrales">
    <div class="row">
      <div class="column medium-12">
      <p class="descripcion_principal">
      This is a moment that no one should miss!</p>

      <p> Can you imagine all those attending the WUP Congress in the same room? This is a moment that no one should miss! During the keynote conferences we will have experts in urban parks and public spaces; they will talk about their professional and personal experiences in addition to touching topics of common interest to our cities.
      </p>
      </div>
    </div>
    <div class="row">

      <?php
      require ("class/clases.php");
        $array_magistrales = new Conferencistas();
        $magistrales = $array_magistrales->magistrales($congreso);
        foreach ($magistrales as $valor) {
          echo '<article>
                <div class="contenido_conferencista item_conf_m">
                  <div>
                    <figure>
                      <img src="img/uploads/'.$valor["foto"].'" alt="">
                    </figure>
                    <figcaption>
                      <hgroup>
                        <h1>'.$valor["nombre"]. ' '.$valor["apellidos"].'</h1>
                        <h2>'.$valor["ciudad"].', '.$valor["pais"].'</h2>
                      </hgroup>
                    </figcaption>
                  </div>
                </div>
                <div class="descripcion_conferencia_m item_conf_m">
                    <div class="">
                      <h1>'.$valor["cargo"].' - '.$valor["empresa"].'</h1>
                      <p>
                      '.$valor["biografia"].'
                      </p>
                    </div>

                  </div>
                </article>';
        }
      ?>

    </div>
    <div class="row align-center ponentes__boton">
      <a href="#" class="sud btn_1">All Speakers</a>
    </div>
</main>


<?php include'inc/footer.php'; ?>

