<?php
class Programa  extends Conexion{
  public function __construct(){
      parent::__construct();
  }

  public function botones(){
    $sql = "SELECT fecha_inicio,fecha_fin FROM congresos";
    $consulta = $this->conexion_db->query($sql);
    $listaBloque = $consulta->fetch_all(MYSQLI_ASSOC);

    $fecha= $listaBloque[0]['fecha_inicio']; 
    $fecha2= $listaBloque[0]['fecha_fin']; 


    $datetime1 = new DateTime($fecha);// Imprime mi�rcoles, 08 de marzo del 2017
    $datetime2 = new DateTime($fecha2);// Imprime mi�rcoles, 08 de marzo del 2017
$num_final= date_format($datetime1, ' jS F ');

$datetime2->modify('+1 day');
$interval = $datetime1->diff($datetime2);
$hola = $interval->format("%a");
$numero = intval($hola);
$count = 0;
$element = '';
while($count < $numero){

    $count++;
$element.='<input type="button" value="Day '.$count.'" id="ocultar'.$count.'"class="btn_programa btn_2 "/>';

}
return $element;

  }

  public function contendorPrograma(){
    $sql = "SELECT fecha_inicio,fecha_fin FROM congresos";
    $consulta = $this->conexion_db->query($sql);
    $listaBloque = $consulta->fetch_all(MYSQLI_ASSOC);

    $fecha= $listaBloque[0]['fecha_inicio']; 
    $fecha2= $listaBloque[0]['fecha_fin']; 


    $datetime1 = new DateTime($fecha);// Imprime mi�rcoles, 08 de marzo del 2017
    $datetime2 = new DateTime($fecha2);// Imprime mi�rcoles, 08 de marzo del 2017
$num_final= date_format($datetime1, ' jS F ');

$datetime2->modify('+1 day');
$interval = $datetime1->diff($datetime2);
$hola = $interval->format("%a");
$numero = intval($hola);
$count = 0;
$element = '';
while($count < $numero){

    $count++;
    $fecha_bloque = date_format($datetime1, 'Y-m-d');

    $num_final= date_format($datetime1, ' jS F ');
    $datetime1->modify('+1 day');
    $element .= '  <div id="dia'.$count.'" class="column medium-6 small-12 ocultar_dia">
<section class="dia">
  <div class="dia_titulo">
    <a href="">'.$num_final.'</a>
    <br>  
  </div>
  <div class="itinerario">

  '.$this->contenedorBloque($fecha_bloque).'
</div>
</section>
</div>';
}
return $element;
  }

  public function contenedorBloque($fechaInicio){

    $sql = "SELECT * FROM programa where fecha = '$fechaInicio' ORDER BY inicio";
    $consulta = $this->conexion_db->query($sql);
    $listaBloque = $consulta->fetch_all(MYSQLI_ASSOC);
    $htmlBloque="";
    foreach($listaBloque as $bloque){



      $strtotime = strtotime($bloque['inicio']);
      $strtotime1 = strtotime($bloque['fin']);
      
      $mysql_time = date('h:i a',$strtotime);
      $mysql_time1 = date('h:i a',$strtotime1);
    
      // $horaI = date_format($strtotime, 'g:i A');
      // $horaF = date_format($strtotime1, 'g:i A');

      $htmlBloque .= '
      <article class="actividad">
      <header id="contenedor'.$bloque['id'].'">
        <div class="centrado_vertical">';
        if($bloque['tipo']=='Conferencias'){
          $htmlBloque .=' <img src="img/icon-magistral.png" alt="">';
          }
          if($bloque['tipo']=='Taller'){
            $htmlBloque .=' <img src="img/icon-taller-vivencial.png" alt="">';
            }
            if($bloque['tipo']=='Informativo'){
              }
           
          $htmlBloque .= '
        </div>
        <div class="hora">
          <i class="fi-clock"></i> '.$mysql_time.' - '.$mysql_time1.'
        </div>
        <div class="tituloActividad contieneBloque" >
          <h6>'.$bloque['titulo'].'</h6>
        </div>
      </header>
      <script>
                $(document).ready(function(){
                    $("#contenedor'.$bloque['id'].'").click(function(){
                        $(".magistrales'.$bloque['id'].'").fadeToggle();
                      });
                });
              </script>';
              if($bloque['tipo']=='Conferencias'){
              $htmlBloque.= $this->contenedorPrograma($bloque['id'],$fechaInicio,$bloque['inicio'],$bloque['fin'],$bloque['tipo']);
              }
              if($bloque['tipo']=='Taller'){
                $htmlBloque.= $this->talleresDatos($bloque['id'],$fechaInicio,$bloque['inicio'],$bloque['fin'],$bloque['tipo']);

              }
      $htmlBloque .= ' </article>';
           


    }

    // $datos = '<h1>'.$fechaInicio.'</h1>';
    return $htmlBloque;

  }

  public function contenedorPrograma($id_bloque,$fechaInicio,$horaI,$horaF,$tipo){
    $sql = "SELECT * FROM conferencias where fecha = '$fechaInicio' AND inicio BETWEEN '$horaI' AND '$horaF' AND id_congreso = 'WUPC2022' ORDER BY inicio";
    $consulta = $this->conexion_db->query($sql);
    $listaBloque = $consulta->fetch_all(MYSQLI_ASSOC);

    $bloqueActividad = "";

    foreach($listaBloque as $valor){
      $bloqueActividad.= ' <section class="magistrales'.$id_bloque.'">';
      
      $resumen = $this->resumen($valor['descripcion']);
      $bloqueActividad.= "<script>
        $(document).ready(function(){
            $('.".$valor["id_conferencia"]."').click(function(){
                $('#".$valor["id_conferencia"]."').fadeToggle();
              });
        });
      </script>";

      
      $bloqueActividad .= "<div class='conferencia'>
                      <div class='lugar'>
                        <i class='fi-marker'></i> <span class=''>".$valor["salon"]."</span>
                      </div>
                      <div>
                        <p class='titulo ".$valor["id_conferencia"]."'>".$valor["conferencia"]."</p>
                        <div class='datosConferencia' id='".$valor["id_conferencia"]."'>";

                        $bloqueActividad .="<p class='resumen_conf'>".$resumen." <small><a href='#' data-open='conf".$valor['id_conferencia']."'>ver más</a></small></p>";                                      

                          $conferencistas = $this->conferencistaImparte($valor["id_conferencia"]);
                          foreach ($conferencistas as $valor) {
                            $bloqueActividad .="<div class='imparten ".$valor["id_conferencia"]."'>
                                              <div>
                                                <img src='https://congresoparques.com/img/uploads/leon/conferencistas/".$valor['foto']."'>
                                              </div>
                                              <div>
                                                <a href='conferencista.php?id=".$valor['id_conferencista']."'><span>".$valor["nombre"]." ".$valor["apellidos"]."  | ".$valor["ciudad"].", ".$valor["pais"]."</span></a>
                                                <p>".$valor["cargo"].", ".$valor["empresa"]."</p>
                                              </div>
                                           </div>

                                           </div>
                                           </div>
                                           </div>
                                           ";
                          }
         
                        
                        
        
      
      $bloqueActividad.= '</section>';
      
    }

    return $bloqueActividad;


  }


  public function talleresDatos($id_bloque,$fechaInicio,$horaI,$horaF,$tipo){

    $bloqueActividad='';
    $bloqueActividad.=' <script>
    $(document).ready(function(){
        $("#contenedor'.$id_bloque.'").click(function(){
            $(".taller'.$id_bloque.'").fadeToggle();
          });
    });
  </script>';
      $bloqueActividad.=' 
    <section class="taller'.$id_bloque.'">
      <div class="lista_talleres">
      <ul>';
          $talleres = $this->talleres($fechaInicio,$horaI,$horaF,$congreso='WUPC2022');
              foreach ($talleres as $valor) { 
               

              $bloqueActividad.= "<li>".$valor['taller']." " .$valor['subtitulo']."</li>";
                $resumen = $this->resumen($valor['descripcion']);
              $bloqueActividad.= "<p class='resumen'>".$resumen." <small><a href='#' data-open='t".$valor['id_taller']."'>ver más</a></small></p>";
            }
        

     $bloqueActividad.='  </ul>
    </div>        
    </section>';
             
    return $bloqueActividad;


  }

  public function actividadBloque($fecha, $horaInicio, $horaFin, $congreso){
    $sql = "SELECT * FROM conferencias where fecha = '$fecha' AND inicio BETWEEN '$horaInicio' AND '$horaFin' AND id_congreso = '$congreso' ORDER BY inicio";
    $consulta = $this->conexion_db->query($sql);
    $listaBloque = $consulta->fetch_all(MYSQLI_ASSOC);

      return $listaBloque;
  }

  public function actividadBloqueExpo($fecha, $horaInicio, $horaFin, $congreso){
    $sql = "SELECT * FROM conferencias where fecha = '$fecha' AND inicio BETWEEN '$horaInicio' AND '$horaFin' AND id_congreso = '$congreso' ORDER BY inicio";
    $consulta = $this->conexion_db->query($sql);
    $listaBloque = $consulta->fetch_all(MYSQLI_ASSOC);

      return $listaBloque;
  }

  public function conferencistaImparte($idConferencia){
    $sql = "SELECT * FROM conferencistas WHERE id_conferencia = $idConferencia";
    $consulta = $this->conexion_db->query($sql);
    $arrayConferencistas = $consulta->fetch_all(MYSQLI_ASSOC);

      return $arrayConferencistas;
  }
  public function datosConferencista($idConferencista){
    $sql = "SELECT * FROM conferencistas WHERE id_usuario = $idConferencista";
    $consulta = $this->conexion_db->query($sql);
    $datosConferencista = $consulta->fetch_all(MYSQLI_ASSOC);
    return $datosConferencista;
  }

  public function ponentes(){
    $sql = "SELECT id_usuario, nombre, foto, cargo, empresa, localidad FROM usuarios
            WHERE evento = 'CPM2019' ORDER BY prioridad";
    $consulta = $this->conexion_db->query($sql);
    $array_ponentes = $consulta->fetch_all(MYSQLI_ASSOC);

      return $array_ponentes;
  }

  public function ponenteSesionesComerciales(){
    $sql = "SELECT u.id_usuario, u.nombre, u.foto,
            u.cargo, u.empresa, u.localidad, c.nombre_conferencia
            FROM usuarios as u
            LEFT JOIN conferencias as c
            ON c.id_conferencia = u.id_conferencia
            WHERE u.evento = 'CPM2019'
            AND c.id_tema = 9" ;
    $consulta = $this->conexion_db->query($sql);
    $array_ponentes = $consulta->fetch_all(MYSQLI_ASSOC);

      return $array_ponentes;
  }

  function resumen($texto, $largor = 15, $puntos = "...")
  {
   $palabras = explode(' ', $texto);
   if (count($palabras) > $largor)
    {
     return implode(' ', array_slice($palabras, 0, $largor)) ." ". $puntos;
    } else
         {
           return $texto;
         }
    }

    public function talleres($fecha, $inicio, $fin, $congreso){
      $sql = "SELECT * FROM talleres WHERE id_congreso = '$congreso' 
      AND fecha = '$fecha' AND inicio BETWEEN '$inicio' AND '$fin' ORDER BY inicio";
      $consulta = $this->conexion_db->query($sql);
      $array_resultados = $consulta->fetch_all(MYSQLI_ASSOC);

      return $array_resultados;
    }

    public function taller($congreso){
      $sql = "SELECT * FROM talleres WHERE id_congreso = '$congreso' ";
      $consulta = $this->conexion_db->query($sql);
      $array_resultados = $consulta->fetch_all(MYSQLI_ASSOC);

      return $array_resultados;
    }

    public function datosConferencia()
    {
      $sql = "SELECT * FROM conferencias";
      $consulta = $this->conexion_db->query($sql);
      $array_resultados = $consulta->fetch_all(MYSQLI_ASSOC);

      return $array_resultados;
    }

    // Datos del conferencista en biografía
    public function biografiaConferencista($id_conferencista){
      $sql= "SELECT *
      FROM conferencistas AS a, conferencias AS b
      INNER JOIN temas AS c ON b.id_tema = c.id_tema
      WHERE a.id_conferencia = b.id_conferencia
      AND a.id_conferencista = $id_conferencista ";

      $consulta = $this->conexion_db->query($sql);
      $array_resultados = $consulta->fetch_all(MYSQLI_ASSOC);

      return $array_resultados;

    }

    public function descarga($id){
      $sql = "SELECT archivos FROM conferencia WHERE
      id_conferencia = '$id' AND archivos IS NOT NULL";
      $consulta = $this->conexion_db->query($sql);
      $resultados = $consulta->fetch_all(MYSQLI_ASSOC);

      return $resultados;
    }

    


}
?>
