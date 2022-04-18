<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Call for SCIENTIFIC POSTER | World Congress 2022</title>
    <link rel="stylesheet" href="../css/foundation.min.css" >
    <link rel="stylesheet" href="../css/app_main.css">

    <link rel="icon" type="image/png" href="./../img/favicon.png" />
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-RSZ8ZMN4QH"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-RSZ8ZMN4QH');
    </script>
    <?php
    require '../inc/app.php';
    use App\Tema;
    $temas = Tema::all();
    ?>
  </head>
  <body>
  <?php include'../inc/menu_resp.php'; ?>

<button class="button__scroll--up"><span class="fi-arrow-up"></span></button>
<?php require ("../inc/traductor.php"); ?>

<div class="hide-for-small-only">
      <?php include'inc/menu.php'; ?>
    </div>


  <header class="header h_acerca_de">
   
      <div class="titulo_pagina_nuevo row">
        <hgroup class="column contenedor__titulo">
          <h1>CALL FOR</h1>
          <h2>SCIENTIFIC POSTER</h2>
          <img src="img/linea verde.png" alt="">
        </hgroup>
      </div>
  </header>
    <section class="container row seccion">
      <div class="column small-12 infoAbstract">
        <p class="text-center">
          <strong>2022 World Congress - Call for Scientific Poster</strong>
        </p>
        <p>If you have questions or problems filling out this form, contact Vitoria Martín, LATAM Secretariat for World Urban Parks at the address: <a href="mailto:latam@worldurbanparks.org">latam@worldurbanparks.org</a> 
          You can also request information through our official channels.
        </p>

      </div>
      <div class="item column small-12">
        <form class="formPropuestas" action="save-poster.php" method="post" enctype="multipart/form-data">
          <fieldset>
            <div class="encabezado">
              ABOUT THE PARTICIPANT:
            </div>
          </fieldset>
          <div class="form_autor">
            <div class="row">
              <div class="column medium-6  small-12">
                <label for="">Name:</label>
                <input type="text" name="nombre" value="" required placeholder="Name">
              </div>
              <div class="column medium-6">
                <label for="">Last Name:</label>
                <input type="text" name="apellidos" value="" required placeholder="Last Name">
              </div>
            </div>
            <div class="row">
              <div class="column medium-6 small-12">
                <label for="">E-mail:</label>
                <input type="email" name="email" value="" required placeholder="E-mail">
              </div>
              <div class="column medium-6 small-12">
                <label for="">Assistant E-mail:</label>
                <input type="email" name="email_asistente" value="" placeholder="(if you have one)">
              </div>
            </div>
            <div class="row">
              <div class="column medium-6 small-12">
                <label for="">Telephone: </label>
                <input type="text" name="telefono" value="" placeholder="(Country Code, National Code, Telephone)">
              </div>
              <div class="column medium-6 small-12">
                <label for="">Job/Position:</label>
                <input type="text" name="cargo" value="" placeholder="Job/Position">
              </div>
            </div>
            <div class="row">
              <div class="column small-12">
                <label for="">Company/Institution:</label>
                <input type="text" name="empresa" value="" placeholder="Company/Institution">
              </div>
            </div>
            <div class="row">
              <div class="column medium-6 small-12">
                <label for="">Country:</label>
                <input type="text" name="pais" value="" placeholder="Country" required>
              </div>
              <div class="column medium-6 small-12">
                <label for="">City:</label>
                <input type="text" name="ciudad" value="" placeholder="City">
              </div>
            </div>
            <div class="row ">
              <div class="column">
                <label for="">Is there more than one speaker? </label>
                <input type="radio" name="grupo" value="1"  id="individual" required> Yes</input>
                <input type="radio" name="grupo" value="0" id="mesaPanel" required> No</input>
              </div>
            </div>
          </div>

          <div class=" encabezado">
          ABOUT THE SCIENTIFIC POSTER:
          </div>
          <div class="row column">
            <label for="">Project Name:</label>
            <input type="text" name="nombre_proyecto" value="" required>
          </div>
          <div class="row ">
           <div class="column medium-6 small-12">
              <label for="">Aligned Track: </label>
              <select class="" name="tema"> 
              <?php foreach($temas as $tema):  ?>
                <option value="<?php echo $tema->id_tema ?>"><?php echo $tema->tema_ing ?></option>";
              <?php endforeach ?>
              </select>
            </div> 
            <div class="column medium-6 small-12">
              <label for="">Categorie: </label>
              <select class="" name="categoria">
                <option value="Student">Student</option>
                <option value="Young Professional">Young Professional</option>
                <option value="Professional">Professional</option>
              </select>
            </div>
          </div>
          <div class="row">
            <div class="column medium-12">
              <label for="">Document:</label>
              <input type="file" name="documento" accept=".doc, .docx, .pdf">
            </div>
          </div>
          <div class="row">
            <div class="column medium-12">
              <label for="">Poster:</label>
              <input type="file" name="poster" accept=".doc, .docx, .pdf">
            </div>
          </div>
          <div class="row column">
          <div class="encabezado"> STRENGTHEN YOUR SUBMISSION:</div>
          <p>In this section you can add various resources to support your project. (Videos, research, articles, news or any other resource that supports the evaluation of your scientific poster).</p>
            <label for="">Link 1:</label>
            <input type="text" name="link1" value="" placeholder="" >
          </div>
          <div class="row column">
          <label for="">Link 2:</label>
            <input type="text" name="link2" value="" placeholder="" >
          </div>
          <div class="row column">
            <label for="">Link 3:</label>
            <input type="text" name="link3" value="" placeholder="" >
          </div>
            
          <div class="text-center">
          <input type="hidden" name="congreso" value="WUPC2022">
          <input type="submit" name="" value="Registration" class="btn btn__principal">
          </div>
        </form>
      </div>
    </section>
   <?php
   include('inc/footer.php');
   ?>
    <!-- <script src="../../../js/vendor/jquery.js"></script> -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script> -->
    <!-- <script src="../../../js/vendor/foundation.min.js"></script> -->
    <script src="./../js/vendor/foundation.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>


    <script>
    // $(document).foundation();
    </script>
    
    
  </body>
</html>

