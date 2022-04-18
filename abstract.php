
  <!doctype html>
<html class="no-js" lang="es" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Conferencistas y Ponentes | Congreso Parques Guayaquil 2020</title>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <?php  
    require "inc/app.php";
    Use App\Tema;
    $temas = Tema::all();
    ?>
  <?php  require("inc/head.php") ?>
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
        <h1>ABSTRACT</h1>
          <!-- <h2>MONTERREY, NUEVO LEON</h2> -->
          <img src="img/linea verde.png" alt="">
          <a href="registration/abstract.php" class="btn__principal">Registration</a>
        </hgroup>
      </div>
  </header>
  <main id="convocatoria_sesiones">
    <div class="row column small-12 text-center seccion">
      <!-- <figure class="ejes_convocatoria">
        <img src="" alt="Ejes Temáticos 2020">
      </figure> -->
    </div>
    <div class="row">
      <div class="medium-12 align-center">
        <h4 class="text-center">Welcome to Monterrey in November for the 2022 World Urban Parks Congress!</h4>
      </div>
    </div><br>
    <div class="row">
      <div class="column medium-6 small-12">
        <p class="text-justify">The call for abstracts aims to receive information on projects around the world that want to be presented at the World Congress of Urban Parks. This congress will be an in-person event with selected conferences and activities on line. </p>
      </div>
      <div class="column medium-6 small-12">
        <p  class="text-justify">The proposals received with the greatest probability of being accepted to be part of the program are those that adhere to our theme and tracks.
          </p>
      </div>
    </div>
    <div class="row">
      <div class="column medium-6 small-12">
        <h4 class="subtituloV">Speaker Profile</h4>
        <ul class="listaVinetas">
          <li><span>Architects, urban planners, landscape architects, habitat designers.</span></li>
          <li><span>Sociologists, anthropologists, marketers, economists and administrators.</span></li>
          <li><span>Public officials of the three levels of government.</span></li>
          <li><span>Environmentalists, associations, and nonprofit organizations.</span></li>
          <li><span>Any other person interested in sharing their knowledge and projects on public space with the attendees.</span></li>
        </ul>
      </div>
      <div class="column medium-6 foto_perfil">
        <figure class="">
          <img src="img/perfil1.png" alt="">
        </figure>
        <figure class="">
          <img src="img/perfil2.png" alt="">
        </figure>
      </div>
    </div>
<br>
    <div class="row fecha_convocatoria align-center">
      <h4 class="subtituloV">Important dates</h4>
    </div>
    <div class="row elecciones_fechas text-center">
      <div class="column medium-6 small-12 ">
        <h5>Limit to send proposals</h5>
        <span><strong>April 30th, 2022 at 11:59 (GMT-6)</strong></span>
      </div>
      <div class="column medium-6 small-12">
        <h5>Communication of results</h5>
        <span><strong>May 2022</strong></span>
      </div>
    </div>
  <br><br>
    <div class="row consideraciones">
      <div class="column medium-12 small-12">
        <h4 class="subtituloV">Call for Presentation Specifics</h4>
        <ol class="listaVinetas">
          <li><span>
          If the proposal is accepted, when indicated, the speaker must sign the privacy agreements, terms and conditions, share their presentation (visual support material), since this material will be made public on the web platform of the National Association of Parks and Recreation of Mexico and the World Urban Parks after the dates of the congress.</span>
          </li>
          <li><span>
          The National Association of Parks and Recreation of Mexico and the World Urban Parks reserve the right to designate the time of intervention of the selected proposals.</span>
          </li>
          <li><span>
          We encourage the distribution of this Call for Presentations.</span>
          </li>
          <li><span>
          The Congress Content Committee reserves the right to make final presentation selections and edit descriptions and speaker biographies.</span>
          </li>
          <li><span>
          By submitting a proposal for consideration, it is understood that you are committed to be present and to participate as proposed, if accepted.</span>
          </li>
          <li><span>
          Additional information on presentation logistics and conference details will be forwarded to all successful applicants.</span>
          </li>
          <li><span>
          The purpose of the session type, size, format, and audience selection questions is to ensure a diversity of session topics and styles. We will endeavor to accommodate your preferences for style and audience size. However, due to the format of this congress, no guarantee can be given as to the level of attendance at any session.</span>
          </li>
        </ol>
      </div>
    </div>
    <div class="beneficios bgSecundario seccion">
      <div class="row">
        <div class="column medium-6 small-12 align-self-middle">
          <div class="imgBeneficios" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
            <figure>
              <img src="img/icon-taller-curricular.png" alt="" >
              <!-- <figcaption>Conferences</figcaption> -->
            </figure>
            <img src="img/icon-expo.png" alt="" >
            <img src="img/icon-magistral.png" alt="">
            <img src="img/icon-sesion.png" alt="">
            <img src="img/icon-eventos-sociales.png" alt="">
            <img src="img/icon-taller-vivencial.png" alt="">
          </div>
        </div>
        <div class="column medium-6 small-12">
          <h4 class="subtituloV">Benefits</h4>
          <p  class="text-justify">The selected speakers will be granted a courtesy ticket for the days of the congress. The courtesy ticket includes:</p>
          <ul class="listaVinetas">
            <li><span>Diploma of participation as a speaker.</spa></li>
            <li><span>All keynotes and sessions.</spa></li>
            <li><span>Entrance to the commercial exhibition “Expo Parques”.</spa></li>
            <li><span>Social events.</span></li>
            <li><span>Special discounts.</span></li>
          </ul>
          <p class="text-justify"><strong >Note:</strong> Expenses related to registration for workshops, transportation, lodging, meals, and speaker fees are not included in the courtesy ticket.</p>
        </div>
      </div>
    </div>

    <div class="row align-center seccion">
      <h4 class="subtituloV">Instructions</h4>
    </div>
    <div class="row instrucciones">
      <div class="column small-12 medium-4 ">
        <figure class="text-center" data-aos="fade-up" data-aos-anchor-placement="center-bottom">
          <img src="img/formulario.png" alt="" >
        </figure>
        <h4>FILL OUT THE FORM</h4>
        <p>If your proposal includes another speaker, it is important to register all speakers.</p>
      </div>
      <div class="column small-12 medium-4 align-center">
        <figure class="text-center" data-aos="fade-up" data-aos-anchor-placement="center-bottom">
          <img src="img/enviar.png" alt="" >
        </figure>
        <h4>SUBMIT YOUR ABSTRACT</h4>
        <p>Sending the abstract does not guarantee your acceptance, nor your registration as a congress attendee.</p>
      </div>
      <div class="column small-12 medium-4 text-center">
        <figure class="text-center" data-aos="fade-up" data-aos-anchor-placement="center-bottom">
          <img src="img/calendario.png" alt="" >
        </figure>
        <h4>WAIT FOR THE RESULTS</h4>
        <p>You will receive the results of the call on the established dates.</p>
      </div>
    </div><br><br>
    <div class="row column">
      <h4 class="subtituloV">Type of session:</h4>
    </div>
    <div class="row sobre_sesion">
      <div class="column small-12 medium-6">
        <span>Session Title:</span>
        <p  class="text-justify">You must create a title that reflects the essence of your session and must be 12 words or less.</p>
        <p><span>Select the <strong class="link_especial">track</strong>
         to which it is aligned.</span>
        <ul class="listaVinetas">
          <?php foreach($temas as $tema) : ?>
            <li>
              <a href="#" data-open="track-<?php echo $tema->id_tema;?>">
                <?php echo $tema->tema_ing; ?>
              </a>
              <div class="reveal" id="track-<?php echo $tema->id_tema;?>" data-reveal >
                <h4><?php echo $tema->tema_ing; ?></h4>
                <p><?php echo $tema->descripcion_ing; ?></p>
                <button class="close-button" data-close aria-label="Close reveal" type="button">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            </li>
          <?php endforeach; ?>
          </ul>
        </p>
        <span>Description: </span>
        <p  class="text-justify">Concisely and clearly describe your session; This should be 200 words or less. If your session is selected, the description will appear on our website, make sure it is attractive and invite attendees to attend it.</p>
      </div>
      <div class="column medium-6">
        <span>Justification:</span>
        <p class="text-justify">Justify the importance of your abstract, identifying how your project/initiative/research solves a problem related to public space and how it relates to the tracks of the congress. There are no limit in the number of words.</p>
        <span>Goals:</span>
        <p  class="text-justify">The session should have clear and measurable learning objectives. Please list 3.</p>
        <span >Type of session:</span>
        <p  class="text-justify">You can make a personal proposal or together with other participants. These can be collaborators of your same organization, but not limited to it. You will be able to make a session proposal with colleagues from social projects, offices, universities - even from different cities or countries! It is important to have the personal information of all the speakers involved in the proposal with a maximum of 2 people.</p>
      </div>
    </div>
    <div class="row align-center seccion">
      <a href="./registration/abstract.php" id="linkRegistroSesion" class="btn btn__principal" target="_blank">
      register proposal
      </a>
    </div>
  </main>

  <?php include('inc/footer.php'); ?>
  <!-- <script src="/js/js.js"></script> -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>




