<?php
 require ("class/clases.php");
$idConferencista = $_GET['id'];
$datos = new Programa();
?>
</head>
<!doctype html>
<html class="no-js" lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conferencista - Ponente</title>
    <?php require ("inc/head.php") ?>

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
          <h1>SPEAKER</h1>
          <h2>INFORMATION</h2>
          <img src="img/linea verde.png" alt="">
          <p>A specialized event of educational and experiential content, aimed <br> at public space professionals and urban parks</p>
        </hgroup>
      </div>
  </header>
<main class="">
  <!-- <div class=" header header-8">
    <div class="row align-middle">
      <div class="column text-center">
        <h1 class="titulos">DETALLES DEL PONENTE</h1>
      </div>
    </div>
  </div> -->
  <section>

    <div class="row  biografias">
      <?php

        $conferencista = $datos->biografiaConferencista($idConferencista);
        foreach($conferencista as $valor) {
          echo"<div class='text-center'>
                  <img src='img/uploads/".$valor['foto']."'>
                </div>
                <div class='derecha detalles-conferencistas'>
                <section>
                <h4>".$valor['nombre']." ".$valor['apellidos']."</h4>
                <h5>Cargo: ".$valor['cargo']." </h5>
                <h5>Empresa/Organización: ".$valor['empresa']."</h5>
                <h5>Localidad: ".$valor['ciudad'].", ".$valor['pais']."</h5>
                </section>
                </div>";
          echo "<div class='izq' >
                <br>
                <h6>\"".$valor['conferencia']."\"</h6>
                <span class='tema'>".$valor['tema']."</span><br>";
                $fecha = $valor["fecha"];
                setlocale(LC_TIME, 'es_ES.UTF-8');
                $fecha_formato = strftime("%A %d de %B", strtotime($fecha));
           echo"<span>".$fecha_formato."</span><br>
                <i class='fi-marker'></i> <span>".$valor['salon']."</span><br>
                <i class='fi-clock'></i>
                <span>".$valor['inicio']." - ".$valor['fin']."</span>
                </div>
                <div>
                  <h5 class='semblanza'>Semblanza:</h5>
                  <p>".$valor['biografia']."</p>
                  <a href='programa.php' class='btn__principal'>Program Complete</a>
                  <a href='ponentes.php' class='btn__principal'>All Speakers</a>
                </div>";
        }

       ?>
    </div>
  
  </section>



</main>

<?php include'inc/footer.php'; ?>
