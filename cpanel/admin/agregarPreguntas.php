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
      <?php include("inc/menuEvento.php") ?>
      </div>
      <section class="column medium-10">
 


      <?php require ("inc/header.php") ?>
      <div class="column medium-8">

          <form id="form" action="altaPreguntaComite.php" method="post" enctype="multipart/form-data">
            <fieldset>
              <div class="row">
                <div class="column">
                  <legend><h5 class ="tituloSeccion">Registro de preguntas</h5></legend>
                </div>
              </div>
              <div class="row ">
                <div class="column medium-6">
                  <label for="">Pregunta</label>
                  <textarea id="pregunta" name="pregunta" rows="2" cols="50"></textarea>
                </div>
                <div class="column medium-6">
                  <label for="">Tipo de pregunta</label>
                  <select name="tipo" id="tipo" >
                  <option value="nulo">Seleccione una opción</option>
                <option value="2">Abierta</option>
                <option value="1">Opción multiple</option>
              
             </select> 
                </div>
              </div>
              <div class="row ">
                <div class="column medium-12">
                  <label for="">Area a calificar de la pregunta:</label>
                  <!-- <input type="text" name="area" value="" id="area" placeholder= "Ejemplo: Acerca del ponente"  > -->
                  <?php echo $propuestas->getHtmlEjeTematico()?>
                </div>
               
              </div>
              
              
              <div class="row ">
              <div class="column medium-12">

                <input type="submit" name="" value="Guardar" class="button">
              </div>
              </div>

            </fieldset>
          </div>
         
          <div class="registro2">
          </form>   
          </div>
</div>

<script>

    let formulario = document.getElementById('form');

    formulario.addEventListener('submit', function(e){
      e.preventDefault();

      let pregunta = document.getElementById('pregunta');
      let tipo = document.getElementById('tipo');
      let area = document.getElementById('area');


      if(pregunta.value == ""|| area.value == "" || tipo.value=="nulo"){

        Swal.fire(
            'Completa todos los campos',
            'Antes de continuar necesitas llenar todos los campos',
            'warning'
                )
      }else{
        formulario.submit();
        
        
      }


    });


    

</script>
    
</body>
</html>