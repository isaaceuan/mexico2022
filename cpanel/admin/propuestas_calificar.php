<?php session_start();
include('../class/funciones.php');
$propuestas = new Propuesta();
<<<<<<< HEAD
=======
$usuario =  $_SESSION['idCredencial'];
  if (!isset($usuario))
   {
      header("location: ../index.html");
   }

>>>>>>> 2fb322abddbfd6fcead82d23a06d2178890e153a
 ?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Administrador</title>
    <?php require ("inc/head.php") ?>
<<<<<<< HEAD
  </head>
  <body>
    <header>
=======
   
  </head>
  <body>
    <!-- <header>
>>>>>>> 2fb322abddbfd6fcead82d23a06d2178890e153a
      <div class="rows">
        <div class="column medium-10 medium-offset-2 text-center">
          <h4>Propuestas</h4>
        </div>
      </div>
<<<<<<< HEAD
    </header>
=======
    </header> -->
>>>>>>> 2fb322abddbfd6fcead82d23a06d2178890e153a
    <main class="row expanded">
      <div class="medium-2">
        <?php include("inc/menu_consejo.php") ?>
      </div>
      <section class="column medium-10">
<<<<<<< HEAD
        <?php
          $formateo = '%A %d %B %Y ';
          setlocale(LC_ALL, "es_ES");
          $mex = strftime($formateo);
          $total_propuestas = $propuestas->totalPropuestas("CPSG2020"); echo "<br><p>Propuestas Registradas: ". $total_propuestas. " </p>";

          $array_propuestas = $propuestas->listaPropuestas("CPSG2020");

          echo "<table class='tablaResultados'>
                <thead>
                  <tr>
                    <th>#</th>
                    <!--<th>Folio</th>-->
                    <th>Propuesta</th>
                    <th>Modalidad</th>
                    <th>Autor</th>
                    <th>País</th>
                    <th>Ciudad</th>
                    <th>Calificar</th>
                    
                  </tr>
                </thead>";
                    $i=0;
                    foreach ($array_propuestas as $valor) {
                      $i += 1;

                  echo"<tr id='".$valor['id_conferencia']."'>
                        <td>".$i ."</td>
                        <!--<td>".$valor['id_conferencia']."</td>-->
                        <td><a href='descripcionPropuesta.php?id=".$valor['id_conferencia']."'>".$valor['conferencia']."<a></td>
                        <td>".$valor['modalidad']."</td>
                        <td>".$valor['nombre']." ".$valor['apellidos']."</td>
                        <td>".$valor['pais']."</td>
                        <td>".$valor['ciudad']."</td>";
                        if(empty($valor['link'])){
                          echo "<td> </td>";
                        }
                        else{
                          echo "<td><a href='".$valor['link']."' target='_blank' class='link_encuesta'> Calificar </a></td>
                          ";
                        }
                        
                        

        }

        echo"</table>";


         ?>
=======

      <?php require ("inc/header.php") ?>
      <h6>* Al darle click al nombre de la propuesta podra visualizar toda la informacion de la misma *</h6>
      <h6>* En esta sección podrá visualizar todas las propuestas que se le asignaron y podrá calificarlas o editarlas segun sea el caso *</h6>
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
>>>>>>> 2fb322abddbfd6fcead82d23a06d2178890e153a
      </section>
    </main>
    <footer></footer>

<<<<<<< HEAD
  <script src="https://code.jquery.com/jquery-3.2.1.js" type="text/javascript"></script>
  <script src="../js/what-input.js" type="text/javascript"></script>
  <script src="../js/foundation.min.js" type="text/javascript"></script>
  <script>
    $(document).foundation();
  </script>
=======
    <script src="https://code.jquery.com/jquery-3.2.1.js" type="text/javascript"></script>
  <!-- <script src="../js/what-input.js" type="text/javascript"></script> -->
  <script src="../js/foundation.min.js" type="text/javascript"></script>
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>
  <script src="js/propuestas.js"></script>



>>>>>>> 2fb322abddbfd6fcead82d23a06d2178890e153a

  </body>
</html>
