<?php session_start();
include('../class/funciones.php');
$propuestas = new Propuesta();
$usuario =  $_SESSION['idCredencial'];

 ?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Administrador</title>
    <?php require ("inc/head.php") ?>
  </head>
  <body>
    <!-- <header>
      <div class="rows">
        <div class="column medium-10 medium-offset-2 text-center">
          <h4>Propuestas</h4>
        </div>
      </div>
    </header> -->
    <main class="row expanded">
      <div class="medium-2">
        <?php include("inc/menu_consejo.php") ?>
      </div>
      <section class="column medium-10">


         


      <?php require ("inc/header.php") ?>
      <h6>* Al darle click al nombre de la propuesta podra visualizar toda la informacion de la misma *</h6>
      <h6>* En esta sección podrá calificar las propuestas pendientes el el botón de acciones *</h6>


      <div id="botones">
      <a  id="totaltemas" href=""  class="button margin-top-1" >Todas las propuestas</a>
</div>

<td><a href=""></a></td>
         
      <table id="tabla" class="tablaResultados">
        <thead>
          <tr>
            <th>#</th>
            <th>Propuesta</th>
            <th>Modalidad</th>
            <th>Autor</th>
            <th>País</th>
            <th>Ciudad</th>
            <th>id tema</th>
            <th>Acciones</th>

          </tr>
          </thead>
          <tbody id="cuerpoTabla">

        </tbody>
          
      </table>
      </section>
    </main>
    <footer></footer>

    <script src="https://code.jquery.com/jquery-3.2.1.js" type="text/javascript"></script>
  <!-- <script src="../js/what-input.js" type="text/javascript"></script> -->
  <script src="../js/foundation.min.js" type="text/javascript"></script>
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>
  <script src="js/propuestasPorCalificarByTema.js"></script>




  </body>
</html>
