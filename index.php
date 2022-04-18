<?php include ("class/reloj.php");
      require ("class/clases.php");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:url"                content="http://congresoparques.com/worldparkscongress" />
    <meta property="og:type"               content="website" />
    <meta property="og:title"              content="2021 World Congress" />
    <meta name="og:site_propiedad"              content="2021 World Congress">
    <meta property="og:description"        content="Un evento especializado en parques urbanos y espacios públicos que tiene como objetivo reunir y capacitar a profesionales de la industria en un mismo lugar." />
    <meta property="og:image"      itemprop="image"        content="https://www.congresoparques.com/guayaquil/img/congreso_banner.png"/>
    <meta property="og:image:width" content="640">
    <meta property="og:image:height" content="300">
    <meta name="description" content="El Congreso de Parques Urbanos tiene como objetivo reunir y capacitar a profesionales en un mismo lugar.">
    <title>2021 World Congress</title>
    <!-- <script type="text/javascript" src="//downloads.mailchimp.com/js/signup-forms/popup/unique-methods/embed.js" data-dojo-config="usePlainJson: true, isDebug: false"></script><script type="text/javascript">window.dojoRequire(["mojo/signup-forms/Loader"], function(L) { L.start({"baseUrl":"mc.us16.list-manage.com","uuid":"bf6125d5cd0c57aa6afed53a7","lid":"5647798800","uniqueMethods":true}) })</script> -->
    <?php require ("inc/head.php"); ?>
  </head>
  <body>
  <button class="button__scroll--up"><span class="fi-arrow-up"></span></button>
  <?php require ("inc/traductor.php"); ?>
  <?php require ("inc/gtm.php"); ?>
    <!--========== Portada  ====-->
    <header id="portada" class="hide-for-small-only">
  
      <?php include'inc/menu.php'; ?>
      <section class="cta_principal">
      <img class="burbuja" src="img/burbuja.png" alt="">

      <div class="text-center frase">
          <h1 class="frase__pais">
          MEXICO 2022
          </h1>
          <h2 class="frase__ciudad">
          MONTERREY, NUEVO LEON
          </h2>
          <h2 class="frase_fecha">
          14 - 18 NOVEMBER
          </h2>
          <div class="frase__contenedorLine">
            <img src="img/line.png" alt="">
            <h3 class="frase__save">Save the date! </h3>

          </div>
          <div class="contenedorPortada">   <!-- contenedor fec -->    
        <!-- <div class="itemContenidoPortada">   -->
          <!-- <div class="text-center frase">
          <p><span>"</span>The measure of any great civilization is its cities and a measure of a city’s greatness is to be found in the quality of its public spaces, its parks and squares<span>"</span></p>
          <small>— John Ruskin —</small>
          </div> -->
        <!-- </div> -->
        <div class="itemContenidoPortada">   <!-- item 2 -->
          <div class="contenedor_contador">
            <div class="fecha">
              <!-- <h4>Nueva Fecha</h4> -->
              <!-- <h4 id=""><span class="dia">5-10</span><span class="mes"> December</span> <span class="anio">2021</span></h4> -->
              <!-- <h5 class="text-center">Virtual Event</h5> -->
            </div>
            <div class="contador">
              <div id='contador'>
              </div>
              <div id='restante'>
              </div>
            </div>
          </div>
        </div>
        
      </div>

          </div>
          
      </section>
      <section class="contenedor_redes_principal">
        <!-- <div class="contenedor_redes_principal"> -->
          <div class="item_icon_redes">
            <a href="https://www.facebook.com/worldurbanparks" target="_blank"><img src="img/iconos/Facebook-b.png" alt=""></a>
          </div>
          <div class="item_icon_redes">
            <a href="https://www.instagram.com/wurbanparks/" target="_blank"><img src="img/iconos/Linkedin-b.png" alt=""></a>
          </div>
          <!-- <div class="item_icon_redes">
            <a href="https://www.facebook.com/CongresoParques/" target="_blank"><img src="img/i_youtube.png" alt=""></a>
          </div> -->
          <div class="item_icon_redes">
            <a href="https://twitter.com/WUParks" target="_blank"><img src="img/iconos/youtube-b.png" alt=""></a>
          </div>
        <!-- </div> -->
      </section>

      <section class="cintaPatrocinadores hide-for-small-only">
        <?php include('inc/cinta_patrocinadores.php') ?>
      </section>
    </header>
    <main>
      <!-- anuncios en popup -->
      <!-- <div id="popup" >
        <div class="content-popup">
            <div class="close"><a href="#" id="close"><i class="fi-x-circle large"></i></div>
            <div>
                <a href="comunicado.php" target="_blank">
                 <img id="img-popup" src="img/comunicado-presencial.png" alt="">
               </a>
            </div>
        </div>
      </div> -->
      <!-- fin popup -->
      <!--   modal   -->
      <div class="small reveal" id="exampleModal1" data-reveal>
        <iframe width="100%" height="435" src="https://www.youtube.com/embed/2fGd3O-kTDY" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        <button class="close-button" data-close aria-label="Close modal" type="button">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <!-- Fin modal -->
      <!--======= cinta patrocinadores ========-->
      
      <!-- ======  resumen ==== -->
      <section  class="bgPrincipal seccion hide-for-small-only">
        <div id="slogan" class="text-center">
          <h1 class="tituloPB">2022 WORLD PARKS CONGRESS</h1>
          <h3 class="subtituloB">BOOSTING CITIES THROUGH PARKS AND PUBLIC SPACES</h3>
        </div>
        <div class="row align-center">
          
        </div>
      </section>
      <!-- <section  class="bgCielo seccion hide-for-small-only">
        <div id="ejes_slider" class="row">
          <h3 class="tituloPA">THEMES</h3>
        </div>
      
      </section> -->
      <!-- ===== Conferencistas magistrales ====== -->
      <section class="talleres hide-for-small-only">
      <?php include('inc/talleres.php') ?>
      </section>
      <section id="seccion_magistrales" class="hide-for-small-only">
        <div class="row">
          <h3 class="tituloPB">KEYNOTE SPEAKERS</h3>
        </div>
        <div class="magistrales_icon">
          <!-- <figure class="contenido_conferencista">
            <img src="./img/perfil1.jpg" alt="">
            <figcaption>
              <h1>Antonio Góngora</h1>
              <h2>Director de TI</h2>
              <h3>ANPR México</h3>
            </figcaption>
          </figure> -->
          <?php
            $array_magistrales = new Conferencistas();
            $congreso = 'WUPC2022';
            $magistrales = $array_magistrales->magistrales($congreso);
            foreach ($magistrales as $valor) 
            {
              echo "<figure class='contenido_conferencista'>";
              echo "<img src='img/uploads/".$valor['foto']."' alt='".$valor['nombre']." ".$valor['apellidos']."'>";
              echo "<figcaption>
                    <h1>".$valor['nombre']." ".$valor['apellidos']."</h1>";
              echo "<h2>".$valor['cargo_ing']."</h2>";
              // echo "<h3>".$valor['ciudad'].", ".$valor['pais']."</h3>
              echo "<h3>".$valor['empresa_ing']."</h3>
                    </figcaption>
                    </figure>";
            }
          ?>
        </div><br>
        <div class="row align-center">
          <a href="ponentes.php" class="btn btn__principal">meet the speakers</a>
        </div>
        <img class="circulo" src="img/circulo1.png" alt="">

      </section>
        <!--=======  paisaje footer  =======-->
        <section id="paisaje" class="hide-for-small-only numeralia">
            <!-- <div class="row "> -->
              <div class="column">
              <span class="fi-torsos-all paisaje__iconos"></span>
                <span>+</span><span id="num_asistentes" class="counter">+4403</span>
                <strong>PRESENT</strong>
              </div>
              
              <div class="column">
              <span class="fi-web paisaje__iconos"></span>
              <span>+</span>              
                <span id="num_paises" class="counter">+74</span>
                <strong>Countries</strong>
              </div>
              <div class="column">
              <span class="fi-megaphone paisaje__iconos"></span>
              <span>+</span>
                <span id="num_ponentes" class="counter">380</span>
                <strong>Speakers</strong>
              </div>
              <div class="column">
              <span class="fi-book-bookmark paisaje__iconos"></span>
              <span>+</span>
                <span id="num_conferencias" class="counter">211</span>
                <strong>Conferences</strong>
              </div>
              <div class="column">
              <span class="fi-widget paisaje__iconos"></span>
              <span>+</span>
                <span id="num_talleres" class="counter">43</span>
                <strong>Workshops</strong>
              </div>
              <!-- <div class="column">
                <span id="num_expositores"></span>
                <strong>Exhibitors</strong>
              </div> -->
            <!-- </div> -->
        </section>
        <!--========== Boletos  =============-->
        <!-- <section id="boletos_contenedor" class="hide-for-small-only">
          <div class="row column">
            <h3 class="tituloPB">Registration Fees</h3>
          </div>
          <section class="contenedor-boleto">
            <div class="boleto">
              <div class="boleto__titulo">
                Individual
              </div>
              <svg class="wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#00b936" fill-opacity="1" d="M0,32L60,58.7C120,85,240,139,360,138.7C480,139,600,85,720,106.7C840,128,960,224,1080,224C1200,224,1320,128,1380,80L1440,32L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z"></path></svg>
              <div class="boleto__precio">
                <p>$20<span>USD</span></p>
                <h6>Member</h6>
              </div>
              <div class="boleto__descripcion">
                <p></p>
                <ul>
                  <li>Non-Member - $95 USD</li>
                  <li>Number of delegates: 1</li>
                  <li>emerging cities: <br>$46.38 USD</li>
                </ul>
              </div>
              <p class="boleto__btn"><a href="https://arpaonline.regfox.com/wup-world-congress-2021" class="btn__comprar" class="btn__comprar">BUY</a></p>
            </div>

            <div class="boleto">
              <div class="boleto__titulo">
                STUDENT/YOUTH
              </div>
              <svg class="wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#00b936" fill-opacity="1" d="M0,32L60,58.7C120,85,240,139,360,138.7C480,139,600,85,720,106.7C840,128,960,224,1080,224C1200,224,1320,128,1380,80L1440,32L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z"></path></svg>
              <div class="boleto__precio">
                <p>$15<span>USD</span></p>
                <h6>Member & Non-Member</h6>
              </div>
              <div class="boleto__descripcion">
                <p></p>
                <ul>
                  <li>Number of delegates: 1</li>
                  <li>emerging cities: <br>$7.13 USD</li>
                </ul>
              </div>
              <p class="boleto__btn"><a href="https://arpaonline.regfox.com/wup-world-congress-2021" class="btn__comprar">BUY</a></p>
            </div>

            <div class="boleto">
              <div class="boleto__titulo">
                SMALL <br>ORGANISATION
              </div>
              <svg class="wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#00b936" fill-opacity="1" d="M0,32L60,58.7C120,85,240,139,360,138.7C480,139,600,85,720,106.7C840,128,960,224,1080,224C1200,224,1320,128,1380,80L1440,32L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z"></path></svg>
              <div class="boleto__precio">
                <p>100<span>USD</span></p>
                <h6>Member</h6>
              </div>
              <div class="boleto__descripcion">
                <p>Less than $1.4 Million NZD ($1 Million USD)</p>
                <ul>
                  <li>Non-Member - $430 USD</li>
                  <li>Numbers of delegates: 5</li>
                  <li>emerging cities: <br>$300 USD</li>
                </ul>
              </div>
              <p class="boleto__btn"><a href="https://arpaonline.regfox.com/wup-world-congress-2021" class="btn__comprar">BUY</a></p>
            </div>

            <div class="boleto">
              <div class="boleto__titulo">
                Medium ORGANISATION
              </div>
              <svg class="wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#00b936" fill-opacity="1" d="M0,32L60,58.7C120,85,240,139,360,138.7C480,139,600,85,720,106.7C840,128,960,224,1080,224C1200,224,1320,128,1380,80L1440,32L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z"></path></svg>
              <div class="boleto__precio">
                <p>$195<span>USD</span></p>
                <h6>Member</h6>
              </div>
              <div class="boleto__descripcion">
                <p>1.4 Million to 14 Million NZD ($1 Million to $10 Million USD)</p>
                <ul>
                  <li>Non-Member - $850 USD</li>
                  <li>Numbers of delegates: 10</li>
                  <li>emerging cities: <br>$214.06 USD</li>
                </ul>
              </div>
              <p class="boleto__btn"><a href="https://arpaonline.regfox.com/wup-world-congress-2021" class="btn__comprar">BUY</a></p>
            </div>

      

            <img class="circulo2" src="img/circulo2.png" alt="">


          </section>
          <!-- <div class="row">
            <div class="column text-center">
              <p class="nota_boletos">*Note all USD figures are based on standard WUP exchange rates for reference only. Your registration will be completed in NZD and any exchange rate will be processed at the daily rate and/or your bank's exchange rate. </p>
            </div>
          </div>

          <div class="row">
            <div class="column contenido_precios">
              <h3 class="subtituloB">General – Non WUP Members rates:</h3>
              <ul>
                <li>Individual - full 92.76 USD (NZD$130) and includes one-year WUP membership</li>
                <li>Organizations see Table and includes one-year WUP membership</li>
                <li>Our Developing Nations discount of 50 percent fee discount (a country with an annual Gross Domestic Product (GDP) of less than $25,000 USD per capita (see website for United Nations list of countries)) applies.</li>
                <li>(extra) Early Discount 30% applies if registered by 30th September 2021</li>
              </ul>
              <h3 class="subtituloB">Existing WUP members:</h3>
              <ul>
                <li>Discount fee $21.41 USD (NZD $30) compared to full (NZD $130)</li>
                <li>All member organizations get access to WUP Discount fee. </li>
                <li>Our Developing Nations discount of 50 percent fee discount (a country with an annual Gross Domestic Product (GDP) of less than $25,000 USD per capita (see website for United Nations list of countries)) applies.</li>
              </ul>
            </div>
          </div> 
         
        </section>-->

        <section id="boletos_contenedor" class="">
        <div class="row column">
            <h3 class="tituloPB">Registration Fees</h3>
          </div>
          <section class="contenedor-boleto">
            <div class="boleto">
              <div class="boleto__titulo">
                <h3>Regular</h3>
              <p>
            Acceso al congreso: <br>
            <span>presencial / virtual</span>
                </p>
              </div>
              <svg class="wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#00b936" fill-opacity="1" d="M0,32L60,58.7C120,85,240,139,360,138.7C480,139,600,85,720,106.7C840,128,960,224,1080,224C1200,224,1320,128,1380,80L1440,32L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z"></path></svg>
              <div class="boleto__precio">
                <p>$20<span>USD</span></p>
              </div>
              <hr>
              <div class="boleto__descripcion">
                <p class="iva">IVA INCLUIDO</p>
                <p class="valido">Válido para países desarrollados</p><br>
              </div>
              <div class="boleto__btn"><a href="https://arpaonline.regfox.com/wup-world-congress-2021" class="btn__comprar"><i class="fi-shopping-cart"></i> BUY</a></div>
            </div>

            <div class="boleto">
              <div class="boleto__titulo">
              <h3>Student</h3>
              <p>
            Acceso al congreso: <br>
            <span>presencial / virtual</span>
                </p>              </div>
              <svg class="wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#00b936" fill-opacity="1" d="M0,32L60,58.7C120,85,240,139,360,138.7C480,139,600,85,720,106.7C840,128,960,224,1080,224C1200,224,1320,128,1380,80L1440,32L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z"></path></svg>
              <div class="boleto__precio">
                <p>$15<span>USD</span></p>
              </div>
              <hr>
              <div class="boleto__descripcion">
                <p class="iva">IVA INCLUIDO</p>
                <p class="valido">Válido para estudiantes a nivel <br> universitario como máximo.</p>
              </div>
              <div class="boleto__btn"><a href="https://arpaonline.regfox.com/wup-world-congress-2021" class="btn__comprar"><i class="fi-shopping-cart"></i> BUY</a></div>
            </div>

            
            <div class="boleto">
              <div class="boleto__titulo">
              <h3>Virtual</h3>
              <p>
            Acceso al congreso: <br>
            <span> virtual</span>
                </p>
              </div>
              <svg class="wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#00b936" fill-opacity="1" d="M0,32L60,58.7C120,85,240,139,360,138.7C480,139,600,85,720,106.7C840,128,960,224,1080,224C1200,224,1320,128,1380,80L1440,32L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z"></path></svg>
              <div class="boleto__precio">
                <p>$195<span>USD</span></p>
              </div>
              <hr>

              <div class="boleto__descripcion">
                <p class="iva">IVA INCLUIDO</p>
                <p class="valido">Sólo incluye los beneficios del  <br> congreso virtual.</p>
              </div>
              <div class="boleto__btn"><a href="https://arpaonline.regfox.com/wup-world-congress-2021" class="btn__comprar"><i class="fi-shopping-cart"></i> BUY</a></div>
            </div>

      

            <img class="circulo2" src="img/circulo2.png" alt="">


          </section>
          </section>

             
    <!--======== formulario de registro boletín ======-->
    <section id="registro" class="hide-for-small-only">
      <div class="registro__contenedor">
      <div class="column medium-6">
      <h2 class="tituloPA">Contact</h2>
      <p class="text-center">If you have questions or comments, contact us!</p>
      <form action="class/formulario.php" method="post" id="formulario-contacto">
        <div class="row">
          <!-- <label for="name">Name:</label> -->
          <input type="text" name="name" placeholder="Name">
        </div>
        <div class="row">
          <!-- <label for="email">E-mail:</label> -->
          <input type="email" name="email" placeholder="E-mail">
        </div>
        <div class="row">
          <textarea name="message" id="" cols="30" rows="3" placeholder="Message"></textarea>
        </div>
        <div class="row align-center">
          <input type="submit" value="SEND" class="btn btn__secundario">
        </div><br>

        <div class="row patrocinador">
          <span>To become a sponsor, request reports to comercial@anpr.org.mx</span>
        </div>
      </form>
      </div>
      <div class="column medium-6 registro__mapa">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7191.507337009546!2d-100.28561921134552!3d25.679459210524172!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8662942a8d42b18f%3A0x1eee54a9dfbc9332!2sCintermex!5e0!3m2!1ses!2smx!4v1528396562531" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen=""></iframe>      </div>
      <!-- <div class="row column text-center">
        <span class="">**We will not share your information.</span>
      </div> -->
      </div>
    </section >
    
    <!--======== Versión móvil =========-->
    <?php include "inc/responsive.php"?>

    <?php include "inc/footer.php" ?>

    <script>
      // let ocultar = document.getElementById('link_home');
      // ocultar.style.setProperty('display', 'none', 'important');
    </script>

    </main>
  </body>
</html>
