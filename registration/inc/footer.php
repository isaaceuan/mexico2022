<footer class="footer footerIndex">
    <div class="med">
      <!-- <h3 class="titulo_footer">Sobre <span>Congreso Parques</Param></span></h3>
      <p>El Congreso de Parques Urbanos Sudamérica es una experiencia única de aprendizaje que tiene como objetivo reunir y 
        capacitar a profesionales de la industria en un mismo lugar.</p> -->
      <a href="#">
        <img src="../img/wup_logotipo_bc.png" alt="" class="footer__logotipo">
      </a>

      <div class="redes">
        <a href="https://www.facebook.com/worldurbanparks">
          <img src="../img/iconos/Facebook-b.png" alt="">
        </a>
        <a href="https://nz.linkedin.com/company/world-urban-parks">
        <img src="../img/iconos/Linkedin-b.png" alt="">
        </a>
        <a href="https://twitter.com/WUParks">
        <img src="../img/iconos/Twitter-b.png" alt="">
        </a>
        <a href="https://www.youtube.com/channel/UCqX9p5GJtS2c1_f4GuXIJPQ">
        <img src="../img/iconos/youtube-b.png" alt="">
        </a>
      </div>
    </div>
    <!-- <div class="column medium-4 hide-for-small-only enlaces_relevantes">
      <h3 class="titulo_footer">Enlaces <span>Relevantes</Param></span></h3>  
      <ul>
        <li><a href="https://www.congresoparques.com/guayaquil/assets/doc/carta-molde.docx">Carta Molde</a></li>
        <li><a href="assets/doc/precios_grupales.pdf">Información General</a></li>
        <li><a href="https://www.flipsnack.com/revistaparques/protocolo-covid-19-congreso-parques-sudam-rica.html">Protocolo COVID-19</a></li>
      </ul>
    </div> -->
    
    <div class="med hide-for-small-only">
      <div class="footer__titulo--centrar">
        <h2>MEXICO 2022</h2>
        <h3>MONTERREY, NUEVO LEON</h3>
        <!-- <h1>SUDAMÉRICA</h1> -->
        <h4>14 - 18 NOVEMBER</h4>
        <div class="frase__contenedorLine--footer">
            <img src="../img/line.png" alt="">
          </div>
          <div class="presentado">
          <p class="bold">Presentado por:</p>
            <p>World Urban Parks</p>
            <p>Asociación Nacional de Parques y Recreación México.</p>
          </div>
          </div>
        <!-- <h6>Presentado por la Asociación Nacional de Parques y Recreación Argentina.</h6> -->
    </div>
    <!-- <div class="med hide-for-small-only redes">
      <div class="redes">
        <a href="https://www.facebook.com/worldurbanparks" target="_blank"><img src="img/i_facebook.png" alt=""></a>
        <a href="https://twitter.com/WUParks" target="_blank"><img src="img/i_twitter.png" alt=""></a>
        <a href="https://www.instagram.com/wurbanparks/" target="_blank"><img src="img/i_instagram.png" alt=""></a>
      </div>      
      
    </div> -->
    <div class="med hide-for-small-only">
      <!-- <h3 class="titulo_footer">Sobre <span>Congreso Parques</Param></span></h3>
      <p>El Congreso de Parques Urbanos Sudamérica es una experiencia única de aprendizaje que tiene como objetivo reunir y 
        capacitar a profesionales de la industria en un mismo lugar.</p> -->
      <a href="#">
        <img src="../img/LOGO ANPR-BLANCO.png" alt="" class="footer__logotipo">
      </a>
    </div>

</footer>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>
<!-- jquery cdn -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>

<!-- cdn librería slick (slider patrocinadores) -->
<script src="js/vendor/foundation.min.js"></script>
<script src="js/vendor/jquery.animateNumber.js" defer></script>
<script src="js/js.js" defer></script>
<script src="js/OcultaryVisualizar.js" defer></script>
<script src="js/resp.js"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/blazy/1.8.2/blazy.min.js"></script> -->
<script src="js/vendor/what-input.js"></script>
<script src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js" ></script>
<!-- Inicialización de foundation -->
<!-- <script>
        ;(function() {
            // Initialize
            var bLazy = new Blazy();
        })();
    </script> -->

    <script>
      


    </script>
<script type="text/javascript">
$(document).foundation()

// Control de menú sticky
$(function (){

   
function explode(){
  $('#menu').addClass("mostrar_menu");
}
setTimeout(explode, 100);
 


    $(window).scroll(function(){
       if ($(this).scrollTop() > 150) {
        $('#encabezado').addClass("menu_solido");
        // $('#link_home').removeClass("home");                                                                                                                                                                                                                                                                                                                                   
       } else {
        $("#encabezado").removeClass("menu_solido");

        // $('#link_home').addClass("home");
       }

       if ($(this).scrollTop() > 1) {
        $('#page').addClass("fixed")
        $('#head').addClass("fixed")

        // $('#link_home').removeClass("home");                                                                                                                                                                                                                                                                                                                                   
       } else {
        $('#page').removeClass("fixed")
        $('#head').addClass("fixed")

        // $('#link_home').addClass("home");
       }
    });

    //asignar botón para regresar a inicio si se encuentra en las demás secciones
    var url=window.location;
    if(url = "https://congresoparques.com/guayaquil/"){
      $('#link_home').removeClass('home'); 
    }
});

const $offcanvas = $('#off-canvas')
$offcanvas.find('li').click(function (ev){
  $offcanvas.foundation('close')
});



//=========  hospedaje  =========
$(function(){
$(".oculto").hide();
$(".mostrar").show();

$(".MO").click(function(){
      var nodo = $(this).attr("href");

      if ($(nodo).is(":visible")){
           $(nodo).hide();
           return false;
      }else{
    $(".oculto").hide();
    $(nodo).fadeToggle( "slow" );
    return false;
      }
});
});

//=========== Pop Up =============
$(document).ready(function(){
  // $('#open').click(function(){
        $('#popup').fadeIn('slow');
        $('.popup-overlay').fadeIn('slow');
        $('.popup-overlay').height($(window).height());
        return false;
    });

$(document).ready(function(){
    $('#close').click(function(){
        $('#popup').fadeOut('slow');
        $('.popup-overlay').fadeOut('slow');
        return false;
    });
 });
</script>


<script type="text/javascript">
 lightbox.option({
      'resizeDuration': 200,
      'wrapAround': true
    })
    
$('.slider').slick({
slidesToShow: 5,
slidesToScroll: 1,
autoplay: true,
autoplaySpeed: 2000,
infinite: true,
responsive: [
      
   
        {
            breakpoint: 500,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2
            }
        }

  ]

});

$('.cinta_expositores').slick({
slidesToShow: 5,
slidesToScroll: 1,
autoplay: true,
autoplaySpeed: 2000,
});

</script>
<!-- contador -->
<script type="text/javascript">
  function countdown(id){
    var fecha=new Date('<?=$_SESSION['ano']?>','<?=$_SESSION['mes']?>','<?=$_SESSION['dia']?>','<?=$_SESSION['hora']?>','<?=$_SESSION['minuto']?>','<?=$_SESSION['segundo']?>')
    var hoy=new Date()
    var dias=0
    var horas=0
    var minutos=0
    var segundos=0
      if (fecha>hoy){
          var diferencia=(fecha.getTime()-hoy.getTime())/1000
          dias=Math.floor(diferencia/86400)
          diferencia=diferencia-(86400*dias)
          horas=Math.floor(diferencia/3600)
          diferencia=diferencia-(3600*horas)
          minutos=Math.floor(diferencia/60)
          diferencia=diferencia-(60*minutos)
          segundos=Math.floor(diferencia)
          document.getElementById("contador").innerHTML='<span class="faltan">MISSING </span><span class="num_dias">' + dias + ' DAYS </span>'  + horas + ':' + minutos + ':' + segundos
                    if (dias>0 || horas>0 || minutos>0 || segundos>0){
                            setTimeout("countdown(\"" + id + "\")",1000)
                    }
            }
            else{
                    // document.getElementById('restante').innerHTML='Quedan ' + dias + ' D&iacute;as, ' + horas + ' Horas, ' + minutos + ' Minutos, ' + segundos + ' Segundos'
            }
        }

        countdown('contador') ;
</script>


<script>

  // BOTON DE SCROLL A TOP
  $(window).scroll(function() {
  var wScroll = $(this).scrollTop(), scrollAmount = 150;

  if (wScroll > scrollAmount) {
    $(".button__scroll--up").addClass("is_showing");
  } else {
    $(".button__scroll--up").removeClass("is_showing");
  }
});


$('.button__scroll--up').click( function(){
  $('html , body').animate({scrollTop: 0},1000);
})
</script>

<script>
  <?php 
$imagesDir = '../img/headers/';

$images = glob($imagesDir . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);

$randomImage = $images[array_rand($images)];
?>

let contenedorFondo = document.querySelector('.header');

if(contenedorFondo){
  contenedorFondo.style.backgroundImage= "linear-gradient(90deg, rgba(0,74,128,1) 20%, rgba(255,255,255,0) 100%), url('<?php echo$randomImage?>')"

}
</script>

<script type="text/javascript">
  function googleTranslateElementInit() {
    new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
  }
  </script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>


<script>
  jQuery(document).ready(function($) {
            $('.counter').counterUp({
                delay: 10,
                time: 1000
            });
        });
</script>
