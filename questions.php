<!doctype html>
<html class="no-js" lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preguntas Frecuentes | Congreso Parques León 2020</title>
    <?php  require("inc/head.php");
require ("class/clases.php");
    $preguntas = new PreguntasFrecuentes();
    
    ?>

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
      </div>
  </header>

<main id="preguntas">
  <article class="">
  <?php  
    echo $preguntas->htmlPreguntas();   
    ?>
    
  </article>
</main>
<?php include'inc/sponsor.php'; ?>
    <?php include'inc/entries.php'; ?>

<?php include'inc/footer.php'; ?>
