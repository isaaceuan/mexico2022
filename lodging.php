<!doctype html>
<html class="no-js" lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospedaje</title>
    <?php  require("inc/head.php") ?>
</head>
<body>
<?php include'inc/menu_resp.php'; ?>

<button class="button__scroll--up"><span class="fi-arrow-up"></span></button>
<?php require ("inc/traductor.php"); ?>

<div class="hide-for-small-only">
      <?php include'inc/menu.php'; ?>
    </div>


  <header class="header h_acerca_de">
   
      <div class="titulo_pagina_nuevo row">
        <hgroup class="column contenedor__titulo">
          <h1>Lodging</h1>
          <img src="img/linea verde.png" alt="">
          <p>A specialized event of educational and experiential content, aimed <br> at public space professionals and urban parks</p>
        </hgroup>
      </div>
  </header>



  <main>
  <div class="row  contenedor_hoteles">
        <h1 class="subtituloAvenirA hospedaje__titulo">Find your lodging!</h1>
      </div>
      <div class="row ">
        <p class="text-center">Monterrey has a wide range of hotels, in this section you will find information about hotels a short distance from the Cintermex Convention Center.</p>
      </div>
      <div class="row ">
        <p class="nota">*CLICK TO SEE THE INFORMATION OF EACH HOTEL.</p>
      </div>
      <div class="row" id="descripcion_hotel">

      <!-- Hotel hotsson -->
      <div id="hotsson" class="oculto mostrar">
        <div class="row">
            <div class="column medium-6 small-12">
              <figure>
                <img src="img/hoteles/hotsson.jpg" alt="" class="img_desc_hotel">
              </figure>
            </div>
            <div class="column medium-6 datos_h">
              <p><span>Location: </span>Blvd. Adolfo López Mateos 1102, Los Gavilanes, 37266 León, Gto.</p>
              <p><span>Reservation Key: </span>"CONGRESO PARQUES URBANOS 2020"<span class="clave_reservacion"></span></p>
              <p><span>Contact: </span>Tel: 477 719 8000 <br>
              acampos@hotsson.com</p>

              <!-- <a href="#" class="btn_vermas">Sitio Web</a> -->
            </div>
        </div>
        <div class="row precios_hotel align-center">
          <div class="column medium-4">
            <br>
            <div class="titulo_tabla habitacion">
              <h6 class="text-center">ROOM</h6>
            </div>
            <div class="tabla">
              <ul>
                <li>Estándar</li>
                <li>Terraza</li>
              </ul>
            </div>
          </div>
          <div class="column medium-4">
            <div class="row">
              <span class="impuestos">Taxes included</span>   
            </div>
            <div class="row">
              <div class="column medium-6">
                <div class="titulo_tabla">
                  <h6 class="text-center">SGL</h6>
                </div>
                <div class="tabla">
                  <ul>
                    <li>$2,160.00 </li>
                    <li>$2,400.00</li>
                  </ul>
                </div>
              </div>
              <div class="column medium-6">
                <div class="titulo_tabla">
                  <h6 class="text-center">DBL</h6>
                </div>
                <div class="tabla">
                  <ul>
                    <li>$2,160.00 </li>
                    <li>$2,400.00</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <div class="column medium-4">
            <div class="row">
              <span class="impuestos">Impuestos incluidos | con desayuno</span>   
            </div>
            <div class="row">
              <div class="column medium-6">
                <div class="titulo_tabla">
                  <h6 class="text-center">SGL</h6>
                </div>
                <div class="tabla">
                  <ul>
                    <li>$2,418.00 </li>
                    <li>$2,658.00</li>
                  </ul>
                </div>
              </div>
              <div class="column medium-6">
                <div class="titulo_tabla">
                  <h6 class="text-center">DBL</h6>
                </div>
                <div class="tabla">
                  <ul>
                    <li>$2,676.00 </li>
                    <li>$2,916.00</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          
        </div>
        <!-- <div class="beneficios_hotel">
          <div class="row column">
            <h5>Beneficios</h5>
          </div>
          <div class="row column">
            <ul>
              <li><i class="fi-checkbox"></i> Desayuno buffet</li>
              <li><i class="fi-checkbox"></i> Estacionamiento sujeto a disponibilidad</li>
              <li><i class="fi-checkbox"></i> Internet</li>
              <li><i class="fi-checkbox"></i> Acceso a piscina atemperada</li>
              <li><i class="fi-checkbox"></i> Gimnasio</li>
            </ul>
          </div>
        </div> -->
      </div>

      <!-- Radisson -->
      <div id="radisson" class="oculto">
        <div class="row">
            <div class="column medium-6 small-12">
              <figure>
                <img src="img/hoteles/radisson.jpg" alt="" class="img_desc_hotel">
              </figure>
            </div>
            <div class="column medium-6 datos_h">
              <p><span>Ubicación: </span>Blvd. Adolfo Lopez Mateos 2611, Ote Col, Barrio de Guadalupe, 37280 León, Gto.</p>
              <p><span>Clave de reservación: </span>"PARQUES URBANOS 2020"<span class="clave_reservacion"></span></p>
              <p><span>Contacto: </span>Tel: 477 710 0022 <br>
              kalcala@radissonpoliforumplaza.com</p>

              <!-- <a href="#" class="btn_vermas">Sitio Web</a> -->
            </div>
        </div>
        <div class="row precios_hotel align-center">
          <div class="column medium-4">
            <br>
            <div class="titulo_tabla habitacion">
              <h6 class="text-center">HABITACIÓN</h6>
            </div>
            <div class="tabla">
              <ul>
                <li>Estándar</li>
                <li>Business</li>
              </ul>
            </div>
          </div>
          <div class="column medium-4">
            <div class="row">
              <span class="impuestos">Impuestos incluidos</span>   
            </div>
            <div class="row">
              <div class="column medium-6">
                <div class="titulo_tabla">
                  <h6 class="text-center">SGL</h6>
                </div>
                <div class="tabla">
                  <ul>
                    <li>$1,558.00 </li>
                    <li>$1,817.00</li>
                  </ul>
                </div>
              </div>
              <div class="column medium-6">
                <div class="titulo_tabla">
                  <h6 class="text-center">DBL</h6>
                </div>
                <div class="tabla">
                  <ul>
                    <li>$1,558.00 </li>
                    <li>$1,817.00</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <div class="column medium-4">
            <div class="row">
              <span class="impuestos">Impuestos incluidos | con desayuno</span>   
            </div>
            <div class="row">
              <div class="column medium-6">
                <div class="titulo_tabla">
                  <h6 class="text-center">SGL</h6>
                </div>
                <div class="tabla">
                  <ul>
                    <li>$1,775.00 </li>
                    <li>$2,035.00</li>
                  </ul>
                </div>
              </div>
              <div class="column medium-6">
                <div class="titulo_tabla">
                  <h6 class="text-center">DBL</h6>
                </div>
                <div class="tabla">
                  <ul>
                    <li>$1,970.00 </li>
                    <li>$2,255.00</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--Fin descripción hotel-->
      <!-- Holidayn inn león -->
      <div id="holiday_inn_leon" class="oculto">
        <div class="row">
            <div class="column medium-6 small-12">
              <figure>
                <img src="img/hoteles/holiday_inn_leon.jpg" alt="" class="img_desc_hotel">
              </figure>
            </div>
            <div class="column medium-6 datos_h">
              <p><span>Ubicación: </span>Blvd. A. López Mateos 1308 ote.</p>
              <p><span>Clave de reservación: </span>"PARQUES URBANOS 2020"<span class="clave_reservacion"></span></p>
              <p><span>Contacto: </span>Tel: 477 7 10 0003 <br>
              ventas.5@hotelesbjx.com</p>

              <!-- <a href="#" class="btn_vermas">Sitio Web</a> -->
            </div>
        </div>
        <div class="row precios_hotel align-center">
          <div class="column medium-4">
            <br>
            <div class="titulo_tabla habitacion">
              <h6 class="text-center">HABITACIÓN</h6>
            </div>
            <div class="tabla">
              <ul>
                <li></li>
                <li></li>
              </ul>
            </div>
          </div>
          <div class="column medium-4">
            <div class="row">
              <span class="impuestos">Impuestos incluidos</span>   
            </div>
            <div class="row">
              <div class="column medium-6">
                <div class="titulo_tabla">
                  <h6 class="text-center">SGL</h6>
                </div>
                <div class="tabla">
                  <ul>
                    <li>$1,430.00 </li>
                    <!-- <li>$1,817.00</li> -->
                  </ul>
                </div>
              </div>
              <div class="column medium-6">
                <div class="titulo_tabla">
                  <h6 class="text-center">DBL</h6>
                </div>
                <div class="tabla">
                  <ul>
                    <li>$1,430.00 </li>
                    <!-- <li>$1,817.00</li> -->
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <div class="column medium-4">
            <div class="row">
              <span class="impuestos">Impuestos incluidos | con desayuno</span>   
            </div>
            <div class="row">
              <div class="column medium-6">
                <div class="titulo_tabla">
                  <h6 class="text-center">SGL</h6>
                </div>
                <div class="tabla">
                  <ul>
                    <li>$1,598.00 </li>
                    <!-- <li>$2,035.00</li> -->
                  </ul>
                </div>
              </div>
              <div class="column medium-6">
                <div class="titulo_tabla">
                  <h6 class="text-center">DBL</h6>
                </div>
                <div class="tabla">
                  <ul>
                    <li>$1,768.00 </li>
                    <!-- <li>$2,255.00</li> -->
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- mision león -->
      <div id="mision_leon" class="oculto">
        <div class="row">
            <div class="column medium-6 small-12">
              <figure>
                <img src="img/hoteles/mision_leon.jpg" alt="" class="img_desc_hotel">
              </figure>
            </div>
            <div class="column medium-6 datos_h">
              <p><span>Ubicación: </span>Calzada de los Héroes 602 Co. La Martinica</p>
              <p><span>Clave de reservación: </span>"PARQUES URBANOS 2020"<span class="clave_reservacion"></span></p>
              <p><span>Contacto: </span>Tel: 477 514 6000 <br>
              gerentegeneralleon@hotelesmision.com.mx</p>

              <!-- <a href="#" class="btn_vermas">Sitio Web</a> -->
            </div>
        </div>
        <div class="row precios_hotel align-center">
          <div class="column medium-4">
            <br>
            <div class="titulo_tabla habitacion">
              <h6 class="text-center">HABITACIÓN</h6>
            </div>
            <div class="tabla">
              <ul>
                <li></li>
                <li></li>
              </ul>
            </div>
          </div>
          <div class="column medium-4">
            <div class="row">
              <span class="impuestos">Impuestos incluidos</span>   
            </div>
            <div class="row">
              <div class="column medium-6">
                <div class="titulo_tabla">
                  <h6 class="text-center">SGL</h6>
                </div>
                <div class="tabla">
                  <ul>
                    <li>$1,121.00 </li>
                    <!-- <li>$1,817.00</li> -->
                  </ul>
                </div>
              </div>
              <div class="column medium-6">
                <div class="titulo_tabla">
                  <h6 class="text-center">DBL</h6>
                </div>
                <div class="tabla">
                  <ul>
                    <li>$1,121.00 </li>
                    <!-- <li>$1,817.00</li> -->
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <div class="column medium-4">
            <div class="row">
              <span class="impuestos">Impuestos incluidos | con desayuno</span>   
            </div>
            <div class="row">
              <div class="column medium-6">
                <div class="titulo_tabla">
                  <h6 class="text-center">SGL</h6>
                </div>
                <div class="tabla">
                  <ul>
                    <li>$1,271.00 </li>
                    <!-- <li>$2,150.00</li> -->
                  </ul>
                </div>
              </div>
              <div class="column medium-6">
                <div class="titulo_tabla">
                  <h6 class="text-center">DBL</h6>
                </div>
                <div class="tabla">
                  <ul>
                    <li>$1,421.00 </li>
                    <!-- <li>$1,250.00</li> -->
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- City Express Plus -->
      <div id="city_express_plus" class="oculto">
        <div class="row">
            <div class="column medium-6 small-12">
              <figure>
                <img src="img/hoteles/city_express_plus.jpg" alt="" class="img_desc_hotel">
              </figure>
            </div>
            <div class="column medium-6 datos_h">
              <p><span>Ubicación: </span>Blvd. Adolfo Lopez Mateos 2005, Col Las Bugambilias </p>
              <p><span>Clave de reservación: </span>"PARQUES URBANOS 2020"<span class="clave_reservacion"></span></p>
              <p><span>Contacto: </span>Tel: 477 431 03 44  <br>
              cpleo.ventas@cityexpress.com.mx </p>

              <!-- <a href="#" class="btn_vermas">Sitio Web</a> -->
            </div>
        </div>
        <div class="row precios_hotel align-center">
          <div class="column medium-4">
            <br>
            <div class="titulo_tabla habitacion">
              <h6 class="text-center">HABITACIÓN</h6>
            </div>
            <div class="tabla">
              <ul>
                <li></li>
                <li></li>
              </ul>
            </div>
          </div>
          <div class="column medium-4">
            <div class="row">
              <span class="impuestos">Impuestos incluidos</span>   
            </div>
            <div class="row">
              <div class="column medium-6">
                <div class="titulo_tabla">
                  <h6 class="text-center">SGL</h6>
                </div>
                <div class="tabla">
                  <ul>
                    <!-- <li>$1,121.00 </li> -->
                    <!-- <li>$1,817.00</li> -->
                  </ul>
                </div>
              </div>
              <div class="column medium-6">
                <div class="titulo_tabla">
                  <h6 class="text-center">DBL</h6>
                </div>
                <div class="tabla">
                  <ul>
                    <!-- <li>$1,121.00 </li> -->
                    <!-- <li>$1,817.00</li> -->
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <div class="column medium-4">
            <div class="row">
              <span class="impuestos">Impuestos incluidos | con desayuno</span>   
            </div>
            <div class="row">
              <div class="column medium-6">
                <div class="titulo_tabla">
                  <h6 class="text-center">SGL</h6>
                </div>
                <div class="tabla">
                  <ul>
                    <li>$1,150.00 </li>
                    <!-- <li>$2,150.00</li> -->
                  </ul>
                </div>
              </div>
              <div class="column medium-6">
                <div class="titulo_tabla">
                  <h6 class="text-center">DBL</h6>
                </div>
                <div class="tabla">
                  <ul>
                    <li>$1,250.00 </li>
                    <!-- <li>$1,250.00</li> -->
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- city_express_jr -->
      <div id="city_express_jr" class="oculto">
        <div class="row">
            <div class="column medium-6 small-12">
              <figure>
                <img src="img/hoteles/city_express_jr.png" alt="" class="img_desc_hotel">
              </figure>
            </div>
            <div class="column medium-6 datos_h">
              <p><span>Ubicación: </span>Blvd. Adolfo López Mateos 2003, Las Bugambilias, 37270 León, Gto.</p>
              <p><span>Clave de reservación: </span>"CONGRESO PARQUES URBANOS 2020"<span class="clave_reservacion"></span></p>
              <p><span>Contacto: </span>Tel: 477 530 5101  <br>
              cjleo.ventas@cityexpress.com.mx </p>

              <!-- <a href="#" class="btn_vermas">Sitio Web</a> -->
            </div>
        </div>
        <div class="row precios_hotel align-center">
          <div class="column medium-4">
            <br>
            <div class="titulo_tabla habitacion">
              <h6 class="text-center">HABITACIÓN</h6>
            </div>
            <div class="tabla">
              <ul>
                <li></li>
                <li></li>
              </ul>
            </div>
          </div>
          <div class="column medium-4">
            <div class="row">
              <span class="impuestos">Impuestos incluidos</span>   
            </div>
            <div class="row">
              <div class="column medium-6">
                <div class="titulo_tabla">
                  <h6 class="text-center">SGL</h6>
                </div>
                <div class="tabla">
                  <ul>
                    <!-- <li>$1,121.00 </li> -->
                    <!-- <li>$1,817.00</li> -->
                  </ul>
                </div>
              </div>
              <div class="column medium-6">
                <div class="titulo_tabla">
                  <h6 class="text-center">DBL</h6>
                </div>
                <div class="tabla">
                  <ul>
                    <!-- <li>$1,121.00 </li> -->
                    <!-- <li>$1,817.00</li> -->
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <div class="column medium-4">
            <div class="row">
              <span class="impuestos">Impuestos incluidos | con desayuno</span>   
            </div>
            <div class="row">
              <div class="column medium-6">
                <div class="titulo_tabla">
                  <h6 class="text-center">SGL</h6>
                </div>
                <div class="tabla">
                  <ul>
                    <li>$861.40 </li>
                    <!-- <li>$2,150.00</li> -->
                  </ul>
                </div>
              </div>
              <div class="column medium-6">
                <div class="titulo_tabla">
                  <h6 class="text-center">DBL</h6>
                </div>
                <div class="tabla">
                  <ul>
                    <li>$979.40 </li>
                    <!-- <li>$1,250.00</li> -->
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- real azteca -->
      <div id="real_azteca" class="oculto">
        <div class="row">
            <div class="column medium-6 small-12">
              <figure>
                <img src="img/hoteles/real_azteca.jpg" alt="" class="img_desc_hotel">
              </figure>
            </div>
            <div class="column medium-6 datos_h">
              <p><span>Ubicación: </span>Blvd. Adolfo López Mateos 1701 Col. Los Gavilanes.</p>
              <p><span>Clave de reservación: </span>"PARQUES URBANOS 2020"<span class="clave_reservacion"></span></p>
              <p><span>Contacto: </span>Tel: 477 764 11 11<br>
              lucero@hotelrealazteca.com.mx</p>

              <!-- <a href="#" class="btn_vermas">Sitio Web</a> -->
            </div>
        </div>
        <div class="row precios_hotel align-center">
          <div class="column medium-4">
            <br>
            <div class="titulo_tabla habitacion">
              <h6 class="text-center">HABITACIÓN</h6>
            </div>
            <div class="tabla">
              <ul>
                <li></li>
                <li></li>
              </ul>
            </div>
          </div>
          <div class="column medium-4">
            <div class="row">
              <span class="impuestos">Impuestos incluidos</span>   
            </div>
            <div class="row">
              <div class="column medium-6">
                <div class="titulo_tabla">
                  <h6 class="text-center">SGL</h6>
                </div>
                <div class="tabla">
                  <ul>
                    <!-- <li>$660.00 </li> -->
                    <!-- <li>$1,817.00</li> -->
                  </ul>
                </div>
              </div>
              <div class="column medium-6">
                <div class="titulo_tabla">
                  <h6 class="text-center">DBL</h6>
                </div>
                <div class="tabla">
                  <ul>
                  <!-- <li>$660.00 </li> -->
                    <!-- <li>$1,817.00</li> -->
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <div class="column medium-4">
            <div class="row">
              <span class="impuestos">Impuestos incluidos | con desayuno</span>   
            </div>
            <div class="row">
              <div class="column medium-6">
                <div class="titulo_tabla">
                  <h6 class="text-center">SGL</h6>
                </div>
                <div class="tabla">
                  <ul>
                    <li>$1,000.00 </li>
                    <!-- <li>$2,150.00</li> -->
                  </ul>
                </div>
              </div>
              <div class="column medium-6">
                <div class="titulo_tabla">
                  <h6 class="text-center">DBL</h6>
                </div>
                <div class="tabla">
                  <ul>
                    <li>$1,000.00 </li>
                    <!-- <li>$1,250.00</li> -->
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

       <!-- ENTERPRISE-->
       <div id="enterprise_inn_express" class="oculto">
        <div class="row">
            <div class="column medium-6 small-12">
              <figure>
                <img src="img/hoteles/enterprise_inn_express.jpg" alt="" class="img_desc_hotel">
              </figure>
            </div>
            <div class="column medium-6 datos_h">
              <p><span>Ubicación: </span>Benito Juárez 233, Centro, 37000 León, Gto</p>
              <p><span>Clave de reservación: </span>"CONGRESO PARQUES URBANOS 2020"<span class="clave_reservacion"></span></p>
              <p><span>Contacto: </span>Tel: 477 716 0014<br>
              gerentegeneralleon@hotelesmision.com.mx</p>

              <!-- <a href="#" class="btn_vermas">Sitio Web</a> -->
            </div>
        </div>
        <div class="row precios_hotel align-center">
          <div class="column medium-4">
            <br>
            <div class="titulo_tabla habitacion">
              <h6 class="text-center">HABITACIÓN</h6>
            </div>
            <div class="tabla">
              <ul>
                <li></li>
                <li></li>
              </ul>
            </div>
          </div>
          <div class="column medium-4">
            <div class="row">
              <span class="impuestos">Impuestos incluidos</span>   
            </div>
            <div class="row">
              <div class="column medium-6">
                <div class="titulo_tabla">
                  <h6 class="text-center">SGL</h6>
                </div>
                <div class="tabla">
                  <ul>
                    <li>$660.00 </li>
                    <!-- <li>$1,817.00</li> -->
                  </ul>
                </div>
              </div>
              <div class="column medium-6">
                <div class="titulo_tabla">
                  <h6 class="text-center">DBL</h6>
                </div>
                <div class="tabla">
                  <ul>
                    <li>$660.00 </li>
                    <!-- <li>$1,817.00</li> -->
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <div class="column medium-4">
            <div class="row">
              <span class="impuestos">Impuestos incluidos | con desayuno</span>   
            </div>
            <div class="row">
              <div class="column medium-6">
                <div class="titulo_tabla">
                  <h6 class="text-center">SGL</h6>
                </div>
                <div class="tabla">
                  <ul>
                    <li>$780.00 </li>
                    <!-- <li>$2,150.00</li> -->
                  </ul>
                </div>
              </div>
              <div class="column medium-6">
                <div class="titulo_tabla">
                  <h6 class="text-center">DBL</h6>
                </div>
                <div class="tabla">
                  <ul>
                    <li>$900.00 </li>
                    <!-- <li>$1,250.00</li> -->
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


      

      <!-- holiday in centro de convenciones -->
      <div id="holiday_inn_centro_convenciones" class="oculto">
        <div class="row">
            <div class="column medium-6 small-12">
              <figure>
                <img src="img/hoteles/holiday_inn_centro_convenciones.jpg" alt="" class="img_desc_hotel">
              </figure>
            </div>
            <div class="column medium-6 datos_h">
              <p><span>Ubicación: </span>Blvd. A López Mateos 2501.</p>
              <p><span>Clave de reservación: </span>"PU5"<span class="clave_reservacion"></span></p>
              <p><span>Contacto: </span>Tel: 477 7 10 0040<br>
              ventas.ap@hotelesbjx.com</p>

              <!-- <a href="#" class="btn_vermas">Sitio Web</a> -->
            </div>
        </div>
        <div class="row precios_hotel align-center">
          <div class="column medium-4">
            <br>
            <div class="titulo_tabla habitacion">
              <h6 class="text-center">HABITACIÓN</h6>
            </div>
            <div class="tabla">
              <ul>
                <li></li>
                <!-- <li></li> -->
              </ul>
            </div>
          </div>
          <div class="column medium-4">
            <div class="row">
              <span class="impuestos">Impuestos incluidos</span>   
            </div>
            <div class="row">
              <div class="column medium-6">
                <div class="titulo_tabla">
                  <h6 class="text-center">SGL</h6>
                </div>
                <div class="tabla">
                  <ul>
                    <li>$1,430.00 </li>
                    <!-- <li>$1,817.00</li> -->
                  </ul>
                </div>
              </div>
              <div class="column medium-6">
                <div class="titulo_tabla">
                  <h6 class="text-center">DBL</h6>
                </div>
                <div class="tabla">
                  <ul>
                    <li>$1,430.00 </li>
                    <!-- <li>$1,817.00</li> -->
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <div class="column medium-4">
            <div class="row">
              <span class="impuestos">Impuestos incluidos | con desayuno</span>   
            </div>
            <div class="row">
              <div class="column medium-6">
                <div class="titulo_tabla">
                  <h6 class="text-center">SGL</h6>
                </div>
                <div class="tabla">
                  <ul>
                    <li>$1,598.00 </li>
                    <!-- <li>$2,150.00</li> -->
                  </ul>
                </div>
              </div>
              <div class="column medium-6">
                <div class="titulo_tabla">
                  <h6 class="text-center">DBL</h6>
                </div>
                <div class="tabla">
                  <ul>
                    <li>$1,768.00 </li>
                    <!-- <li>$1,250.00</li> -->
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- roma -->
      <div id="roma" class="oculto">
        <div class="row">
            <div class="column medium-6 small-12">
              <figure>
                <img src="img/hoteles/roma.jpg" alt="" class="img_desc_hotel">
              </figure>
            </div>
            <div class="column medium-6 datos_h">
              <p><span>Ubicación: </span>Nuevo Vallarta 202, El Coecillo, 37260 León, Gto.</p>
              <p><span>Clave de reservación: </span>"CONGRESO PARQUES URBANOS 2020"<span class="clave_reservacion"></span></p>
              <p><span>Contacto: </span>Tel: 477 763 4747<br>
              terehotelroma@hotmail.com</p>

              <!-- <a href="#" class="btn_vermas">Sitio Web</a> -->
            </div>
        </div>
        <div class="row precios_hotel align-center">
          <div class="column medium-4">
            <br>
            <div class="titulo_tabla habitacion">
              <h6 class="text-center">HABITACIÓN</h6>
            </div>
            <div class="tabla">
              <ul>
                <li></li>
                <!-- <li></li> -->
              </ul>
            </div>
          </div>
          <div class="column medium-4">
            <div class="row">
              <span class="impuestos">Impuestos incluidos</span>   
            </div>
            <div class="row">
              <div class="column medium-6">
                <div class="titulo_tabla">
                  <h6 class="text-center">SGL</h6>
                </div>
                <div class="tabla">
                  <ul>
                    <!-- <li>$1,430.00 </li> -->
                    <!-- <li>$1,817.00</li> -->
                  </ul>
                </div>
              </div>
              <div class="column medium-6">
                <div class="titulo_tabla">
                  <h6 class="text-center">DBL</h6>
                </div>
                <div class="tabla">
                  <ul>
                    <!-- <li>$1,430.00 </li> -->
                    <!-- <li>$1,817.00</li> -->
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <div class="column medium-4">
            <div class="row">
              <span class="impuestos">Impuestos incluidos | con desayuno</span>   
            </div>
            <div class="row">
              <div class="column medium-6">
                <div class="titulo_tabla">
                  <h6 class="text-center">SGL</h6>
                </div>
                <div class="tabla">
                  <ul>
                    <li>$720.00 </li>
                    <!-- <li>$2,150.00</li> -->
                  </ul>
                </div>
              </div>
              <div class="column medium-6">
                <div class="titulo_tabla">
                  <h6 class="text-center">DBL</h6>
                </div>
                <div class="tabla">
                  <ul>
                    <li>$720.00 </li>
                    <!-- <li>$1,250.00</li> -->
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


      <!-- holiday suites -->
      <div id="h_s" class="oculto">
        <div class="row">
            <div class="column medium-6 small-12">
              <figure>
                <img src="img/hoteles/holiday_suites.png" alt="" class="img_desc_hotel">
              </figure>
            </div>
            <div class="column medium-6 datos_h">
              <p><span>Ubicación: </span>Blvd. Adolfo López Mateos 2619 Pte.</p>
              <p><span>Clave de reservación: </span>PARQUESURBANOS2020<span class="clave_reservacion"></span></p>
              <p><span>Contacto: </span>Tel: 477 775 5100<br>
              ventas.pm@hotesbjx.com</p>

              <!-- <a href="#" class="btn_vermas">Sitio Web</a> -->
            </div>
        </div>
        <div class="row precios_hotel align-center">
          <div class="column medium-4">
            <br>
            <div class="titulo_tabla habitacion">
              <h6 class="text-center">HABITACIÓN</h6>
            </div>
            <div class="tabla">
              <ul>
                <li></li>
                <!-- <li></li> -->
              </ul>
            </div>
          </div>
          <div class="column medium-4">
            <div class="row">
              <span class="impuestos">Impuestos incluidos</span>   
            </div>
            <div class="row">
              <div class="column medium-6">
                <div class="titulo_tabla">
                  <h6 class="text-center">SGL</h6>
                </div>
                <div class="tabla">
                  <ul>
                    <li>$1,760.00 </li>
                    <!-- <li>$1,817.00</li> -->
                  </ul>
                </div>
              </div>
              <div class="column medium-6">
                <div class="titulo_tabla">
                  <h6 class="text-center">DBL</h6>
                </div>
                <div class="tabla">
                  <ul>
                    <li>$1,760.00 </li>
                    <!-- <li>$1,817.00</li> -->
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <div class="column medium-4">
            <div class="row">
              <span class="impuestos">Impuestos incluidos | con desayuno</span>   
            </div>
            <div class="row">
              <div class="column medium-6">
                <div class="titulo_tabla">
                  <h6 class="text-center">SGL</h6>
                </div>
                <div class="tabla">
                  <ul>
                    <li>$1,930.00 </li>
                    <!-- <li>$2,150.00</li> -->
                  </ul>
                </div>
              </div>
              <div class="column medium-6">
                <div class="titulo_tabla">
                  <h6 class="text-center">DBL</h6>
                </div>
                <div class="tabla">
                  <ul>
                    <li>$2,060.00 </li>
                    <!-- <li>$1,250.00</li> -->
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


      <!-- fiesta inn  -->
      <div id="fiesta_inn" class="oculto">
        <div class="row">
            <div class="column medium-6 small-12">
              <figure>
                <img src="img/hoteles/fiesta_inn.png" alt="" class="img_desc_hotel">
              </figure>
            </div>
            <div class="column medium-6 datos_h">
              <p><span>Ubicación: </span>Blvd. Adolfo López Mateos 2502, Col, Jardines de Jerez, 37530 León, Gto</p>
              <p><span>Clave de reservación: </span>CONGRESO PARQUES URBANOS 2020<span class="clave_reservacion"></span></p>
              <p><span>Contacto: </span>Tel: 477 710 0500<br>
              jocelyn.peralta@posadas.com</p>

              <!-- <a href="#" class="btn_vermas">Sitio Web</a> -->
            </div>
        </div>
        <div class="row precios_hotel align-center">
          <div class="column medium-4">
            <br>
            <div class="titulo_tabla habitacion">
              <h6 class="text-center">HABITACIÓN</h6>
            </div>
            <div class="tabla">
              <ul>
                <li></li>
                <!-- <li></li> -->
              </ul>
            </div>
          </div>
          <div class="column medium-4">
            <div class="row">
              <span class="impuestos">Impuestos incluidos</span>   
            </div>
            <div class="row">
              <div class="column medium-6">
                <div class="titulo_tabla">
                  <h6 class="text-center">SGL</h6>
                </div>
                <div class="tabla">
                  <ul>
                    <!-- <li>$1,760.00 </li> -->
                    <!-- <li>$1,817.00</li> -->
                  </ul>
                </div>
              </div>
              <div class="column medium-6">
                <div class="titulo_tabla">
                  <h6 class="text-center">DBL</h6>
                </div>
                <div class="tabla">
                  <ul>
                    <!-- <li>$1,760.00 </li> -->
                    <!-- <li>$1,817.00</li> -->
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <div class="column medium-4">
            <div class="row">
              <span class="impuestos">Impuestos incluidos | con desayuno</span>   
            </div>
            <div class="row">
              <div class="column medium-6">
                <div class="titulo_tabla">
                  <h6 class="text-center">SGL</h6>
                </div>
                <div class="tabla">
                  <ul>
                    <li>$1,140.00 </li>
                    <!-- <li>$2,150.00</li> -->
                  </ul>
                </div>
              </div>
              <div class="column medium-6">
                <div class="titulo_tabla">
                  <h6 class="text-center">DBL</h6>
                </div>
                <div class="tabla">
                  <ul>
                    <li>$1,320.00 </li>
                    <!-- <li>$1,250.00</li> -->
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- one antares  -->
      <div id="one_antares" class="oculto">
        <div class="row">
            <div class="column medium-6 small-12">
              <figure>
                <img src="img/hoteles/one_antares.png" alt="" class="img_desc_hotel">
              </figure>
            </div>
            <div class="column medium-6 datos_h">
              <p><span>Ubicación: </span>Blvd. Adolfo López Mateos 2500 E Col. San Isidro de Jerez</p>
              <p><span>Clave de reservación: </span><span class="clave_reservacion"></span></p>
              <p><span>Contacto: </span>Tel: 477 101 69 00<br>
              ventas1lean@posadas.com</p>

              <!-- <a href="#" class="btn_vermas">Sitio Web</a> -->
            </div>
        </div>
        <div class="row precios_hotel align-center">
          <div class="column medium-4">
            <br>
            <div class="titulo_tabla habitacion">
              <h6 class="text-center">HABITACIÓN</h6>
            </div>
            <div class="tabla">
              <ul>
                <li></li>
                <!-- <li></li> -->
              </ul>
            </div>
          </div>
          <div class="column medium-4">
            <div class="row">
              <span class="impuestos">Impuestos incluidos</span>   
            </div>
            <div class="row">
              <div class="column medium-6">
                <div class="titulo_tabla">
                  <h6 class="text-center">SGL</h6>
                </div>
                <div class="tabla">
                  <ul>
                    <!-- <li>$1,760.00 </li> -->
                    <!-- <li>$1,817.00</li> -->
                  </ul>
                </div>
              </div>
              <div class="column medium-6">
                <div class="titulo_tabla">
                  <h6 class="text-center">DBL</h6>
                </div>
                <div class="tabla">
                  <ul>
                    <!-- <li>$1,760.00 </li> -->
                    <!-- <li>$1,817.00</li> -->
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <div class="column medium-4">
            <div class="row">
              <span class="impuestos">Impuestos incluidos | con desayuno</span>   
            </div>
            <div class="row">
              <div class="column medium-6">
                <div class="titulo_tabla">
                  <h6 class="text-center">SGL</h6>
                </div>
                <div class="tabla">
                  <ul>
                    <li>$876.00 </li>
                    <!-- <li>$2,150.00</li> -->
                  </ul>
                </div>
              </div>
              <div class="column medium-6">
                <div class="titulo_tabla">
                  <h6 class="text-center">DBL</h6>
                </div>
                <div class="tabla">
                  <ul>
                    <li>$876.00 </li>
                    <!-- <li>$1,250.00</li> -->
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

       <!-- hotsson smart -->
       <div id="hotsson_smart" class="oculto">
        <div class="row">
            <div class="column medium-6 small-12">
              <figure>
                <img src="img/hoteles/hotsson_smart.png" alt="" class="img_desc_hotel">
              </figure>
            </div>
            <div class="column medium-6 datos_h">
              <p><span>Ubicación: </span>Blvd. Adolfo López Mateos 2590 Col. El tlacuache C.P. 37530</p>
              <p><span>Clave de reservación: </span><span class="clave_reservacion">PARQUES URBANOS 2020</span></p>
              <p><span>Contacto: </span>Tel: 477 101 85 00 ext. 2002<br>
              reservaciones9@hotsson.com / gcalderonm@hotssonsmart.com</p>

              <!-- <a href="#" class="btn_vermas">Sitio Web</a> -->
            </div>
        </div>
        <div class="row precios_hotel align-center">
          <div class="column medium-4">
            <br>
            <div class="titulo_tabla habitacion">
              <h6 class="text-center">HABITACIÓN</h6>
            </div>
            <div class="tabla">
              <ul>
                <li>LOFT CAMA KING SIZE Ó 2 CAMAS MATRIMONIALES</li>
                <!-- <li></li> -->
              </ul>
            </div>
          </div>
          <div class="column medium-4">
            <div class="row">
              <span class="impuestos">Impuestos incluidos</span>   
            </div>
            <div class="row">
              <div class="column medium-6">
                <div class="titulo_tabla">
                  <h6 class="text-center">SGL</h6>
                </div>
                <div class="tabla">
                  <ul>
                    <li>$1,338.00 </li>
                    <!-- <li>$1,817.00</li> -->
                  </ul>
                </div>
              </div>
              <div class="column medium-6">
                <div class="titulo_tabla">
                  <h6 class="text-center">DBL</h6>
                </div>
                <div class="tabla">
                  <ul>
                    <li>$1,338.00 </li>
                    <!-- <li>$1,817.00</li> -->
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <div class="column medium-4">
            <div class="row">
              <span class="impuestos">Impuestos incluidos | con desayuno</span>   
            </div>
            <div class="row">
              <div class="column medium-6">
                <div class="titulo_tabla">
                  <h6 class="text-center">SGL</h6>
                </div>
                <div class="tabla">
                  <ul>
                    <li>$1,513.00 </li>
                    <!-- <li>$2,150.00</li> -->
                  </ul>
                </div>
              </div>
              <div class="column medium-6">
                <div class="titulo_tabla">
                  <h6 class="text-center">DBL</h6>
                </div>
                <div class="tabla">
                  <ul>
                    <li>$1,688.00 </li>
                    <!-- <li>$1,250.00</li> -->
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


      <!-- one poliforum -->
      <div id="one_poliforum" class="oculto">
        <div class="row">
            <div class="column medium-6 small-12">
              <figure>
                <img src="img/hoteles/logo_one.jpg" alt="" class="img_desc_hotel">
              </figure>
            </div>
            <div class="column medium-6 datos_h">
              <p><span>Ubicación: </span>Blvd. Mariano Escobedo #2920 E1 Col. El tlacuache C.P. 37530</p>
              <p><span>Clave de reservación: </span><span class="clave_reservacion">CONGRESO PARQUES URBANOS 2020</span></p>
              <p><span>Contacto: </span>Tel: 477 1018500<br>
              patricia.ramirez@posadas.com</p>

              <!-- <a href="#" class="btn_vermas">Sitio Web</a> -->
            </div>
        </div>
        <div class="row precios_hotel align-center">
          <div class="column medium-4">
            <br>
            <div class="titulo_tabla habitacion">
              <h6 class="text-center">HABITACIÓN</h6>
            </div>
            <div class="tabla">
              <ul>
                <!-- <li>LOFT CAMA KING SIZE Ó 2 CAMAS MATRIMONIALES</li> -->
                <!-- <li></li> -->
              </ul>
            </div>
          </div>
          <div class="column medium-4">
            <div class="row">
              <span class="impuestos">Impuestos incluidos</span>   
            </div>
            <div class="row">
              <div class="column medium-6">
                <div class="titulo_tabla">
                  <h6 class="text-center">SGL</h6>
                </div>
                <div class="tabla">
                  <ul>
                    <!-- <li>$1,338.00 </li> -->
                    <!-- <li>$1,817.00</li> -->
                  </ul>
                </div>
              </div>
              <div class="column medium-6">
                <div class="titulo_tabla">
                  <h6 class="text-center">DBL</h6>
                </div>
                <div class="tabla">
                  <ul>
                    <!-- <li>$1,338.00 </li> -->
                    <!-- <li>$1,817.00</li> -->
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <div class="column medium-4">
            <div class="row">
              <span class="impuestos">Impuestos incluidos | con desayuno</span>   
            </div>
            <div class="row">
              <div class="column medium-6">
                <div class="titulo_tabla">
                  <h6 class="text-center">SGL</h6>
                </div>
                <div class="tabla">
                  <ul>
                    <li>$876.00 </li>
                    <!-- <li>$2,150.00</li> -->
                  </ul>
                </div>
              </div>
              <div class="column medium-6">
                <div class="titulo_tabla">
                  <h6 class="text-center">DBL</h6>
                </div>
                <div class="tabla">
                  <ul>
                    <li>$876.00 </li>
                    <!-- <li>$1,250.00</li> -->
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Hilton Garden Inn -->
      <div id="hilton_garden" class="oculto">
        <div class="row">
            <div class="column medium-6 small-12">
              <figure>
                <img src="img/hoteles/hilton_garden.jpg" alt="" class="img_desc_hotel">
              </figure>
            </div>
            <div class="column medium-6 datos_h">
              <p><span>Ubicación: </span>Blvd. Adolfo Lopez Mateos #1904 | Col. San Isidro de Jerez | C.P. 37530 | León, Guanajuato. México</p>
              <p><span>Clave de reservación: </span><span class="clave_reservacion">III CONGRESO INTERNACIONL DE PARQUES URBANOS</span></p>
              <p><span>Contacto: </span>Tel. (477) 711 7106 Cel. 477 25 49 116<br>
              ventas1@hotelesots.com</p>

              <!-- <a href="#" class="btn_vermas">Sitio Web</a> -->
            </div>
        </div>
        <div class="row precios_hotel align-center">
          <div class="column medium-4">
            <br>
            <div class="titulo_tabla habitacion">
              <h6 class="text-center">HABITACIÓN</h6>
            </div>
            <div class="tabla">
              <ul>
                <!-- <li>LOFT CAMA KING SIZE Ó 2 CAMAS MATRIMONIALES</li> -->
                <!-- <li></li> -->
              </ul>
            </div>
          </div>
          <div class="column medium-4">
            <div class="row">
              <span class="impuestos">Impuestos incluidos</span>   
            </div>
            <div class="row">
              <div class="column medium-6">
                <div class="titulo_tabla">
                  <h6 class="text-center">SGL</h6>
                </div>
                <div class="tabla">
                  <ul>
                    <li>$1,345.00 </li>
                    <!-- <li>$1,817.00</li> -->
                  </ul>
                </div>
              </div>
              <div class="column medium-6">
                <div class="titulo_tabla">
                  <h6 class="text-center">DBL</h6>
                </div>
                <div class="tabla">
                  <ul>
                    <li>$1,345.00 </li>
                    <!-- <li>$1,817.00</li> -->
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <div class="column medium-4">
            <div class="row">
              <span class="impuestos">Impuestos incluidos | con desayuno</span>   
            </div>
            <div class="row">
              <div class="column medium-6">
                <div class="titulo_tabla">
                  <h6 class="text-center">SGL</h6>
                </div>
                <div class="tabla">
                  <ul>
                    <!-- <li>$876.00 </li> -->
                    <!-- <li>$2,150.00</li> -->
                  </ul>
                </div>
              </div>
              <div class="column medium-6">
                <div class="titulo_tabla">
                  <h6 class="text-center">DBL</h6>
                </div>
                <div class="tabla">
                  <ul>
                    <!-- <li>$876.00 </li> -->
                    <!-- <li>$1,250.00</li> -->
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


      
    </div>
  <div class="contenedor_hoteles menu_hoteles">
    <div class="row align-center">
      <div class="column medium-1 small-6">
        <div class="item_hotel">
          <figure >
            <a href="#hotsson" class="MO"><img src="img/hoteles/hotsson.jpg" alt=""></a>
          </figure>
          <span class="overlay"></span>
        </div>
      </div>
      <div class="column medium-1 small-6">
        <figure>
          <a href="#radisson" class="MO"><img src="img/hoteles/radisson.jpg" alt=""></a>
        </figure>
      </div>
      <div class="column medium-1 small-6">
        <figure>
          <a href="#holiday_inn_leon" class="MO"><img src="img/hoteles/holiday_inn_leon.jpg" alt=""></a>
        </figure>
      </div>
      <div class="column medium-1 small-6">
        <figure>
          <a href="#mision_leon" class="MO"><img src="img/hoteles/h_mision.png" alt=""></a>
        </figure>
      </div>
      <div class="column medium-1 small-6">
        <div class="item_hotel">
          <figure >
            <a href="#city_express_plus" class="MO"><img src="img/hoteles/city_express_plus.jpg" alt=""></a>
          </figure>
          <span class="overlay"></span>
        </div>
      </div>
      <div class="column medium-1 small-6">
        <figure >
          <a href="#city_express_jr" class="MO"><img src="img/hoteles/city_express_jr.png" alt=""></a>
        </figure>
        <span class="overlay"></span>
    </div>
    <div class="column medium-1 small-6">
          <figure>
            <a href="#real_azteca" class="MO"><img src="img/hoteles/real_azteca.jpg" alt=""></a>
          </figure>
        </div>
      <div class="column medium-1 small-6">
        <figure>
          <a href="#enterprise_inn_express" class="MO"><img src="img/hoteles/enterprise_inn_express.jpg" alt=""></a>
        </figure>
      </div>
      <div class="column medium-1 small-6">
          <figure>
            <a href="#fiesta_inn" class="MO"><img src="img/hoteles/fiesta_inn.png" alt=""></a>
          </figure>
        </div>
      <!-- <div class="column medium-2 small-6">
        <figure>
          <a href="#la_estancia" class="MO"><img src="../../img/uploads/leon/hoteles/la_estancia.jpg" alt=""></a>
        </figure>
      </div> -->
      <div class="column medium-1 small-6">
        <figure>
          <a href="#holiday_inn_centro_convenciones" class="MO"><img src="img/hoteles/holiday_inn_centro_convenciones.jpg" alt=""></a>
        </figure>
      </div>
      <div class="column medium-1 small-6">
        <figure>
          <a href="#roma" class="MO"><img src="img/hoteles/roma.png" alt=""></a>
        </figure>
      </div>
      <div class="column medium-1 small-6">
        <figure>
          <a href="#h_s" class="MO"><img src="img/hoteles/holiday_suites.png" alt=""></a>
        </figure>
      </div>
    </div>
    <br>
  
   
    <div class="row align-center">
      
        <div class="column medium-1 small-6">
          <figure>
            <a href="#one_antares" class="MO"><img src="img/hoteles/one_antares.png" alt=""></a>
          </figure>
        </div>
        <div class="column medium-1 small-6">
          <figure>
            <a href="#hotsson_smart" class="MO"><img src="img/hoteles/hotsson_smart.png" alt=""></a>
          </figure>
        </div>
        <div class="column medium-1 small-6">
          <figure>
            <a href="#one_poliforum" class="MO"><img src="img/hoteles/logo_one.jpg" alt=""></a>
          </figure>
        </div>
        <div class="column medium-1 small-6">
          <figure>
            <a href="#hilton_garden" class="MO"><img src="img/hoteles/hilton_garden.jpg" alt=""></a>
          </figure>
        </div>
      </div>


    <div class="row align-center">
      
      
      <!-- <div class="column medium-3 small-6">
        <figure>
          <a href="#presidente" class="MO"><img src="../../congresoparques/img/uploads/leon/hoteles/roma.jpg" alt=""></a>
        </figure>
      </div> -->
    </div>
  </div>

<?php include'inc/sponsor.php'; ?>
    <?php include'inc/entries.php'; ?>
<?php include'inc/footer.php'; ?>
