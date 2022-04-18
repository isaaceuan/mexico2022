<?php
class Conferencia extends Conexion{

    public function __construct(){

      parent::__construct();

    }


    public function eliminarPregunta($id){
      $sql ="DELETE FROM preguntas
      WHERE id_pregunta = '$id'";
      $resultado = $this->conexion_db->query($sql);

      if($resultado){
        echo json_encode('ok');
      }else{
        echo json_encode('error');

      }
        
    }

    public function temasByUsuario($id_usuario){
      $sql = "SELECT * FROM comite_tema
      INNER JOIN temas ON temas.id_tema = comite_tema.id_tema 
      WHERE id_credencial = '$id_usuario'
      ";
      $resultado = $this->conexion_db->query($sql);
      $resultado_consulta = $resultado->fetch_all(MYSQLI_ASSOC);
      echo json_encode($resultado_consulta);
    }

    public function totalPropuestas(){

      $sql ="SELECT DISTINCT * FROM calificar_propuestas
      GROUP BY id_conferencia
      ORDER BY id_conferencia DESC
      ";
        $resultado = $this->conexion_db->query($sql);
        $resultado_consulta = $resultado->fetch_all(MYSQLI_ASSOC);

        $i=0;

        foreach($resultado_consulta as $arr){
          // $sql="SELECT DISTINCT conferencias.id_conferencia, conferencias.conferencia, conferencias.modalidad, b.nombre,b.pais, b.ciudad,b.id_conferencia, conferencias.id_tema FROM conferencias
          // LEFT JOIN aspirantes AS b
          // ON conferencias.id_conferencia = b.id_conferencia
          // WHERE conferencias.id_tema = '$arr'
          // GROUP BY conferencias.id_conferencia
          // ";

          $id_conf = $arr['id_conferencia'];
  
          $sql1 = "SELECT DISTINCT a.id_conferencia, a.conferencia, a.modalidad, a.link, a.id_tema, a.id_congreso, b.nombre,
          b.apellidos, b.pais, b.ciudad ,temas.tema, a.status FROM conferencias AS a
          INNER JOIN aspirantes AS b
          ON a.id_conferencia = b.id_conferencia
          INNER JOIN temas on temas.id_tema = a.id_tema
          WHERE a.id_conferencia = '$id_conf'
          GROUP BY a.id_conferencia";
          $resultado1 = $this->conexion_db->query($sql1);
          $conferencias1 = $resultado1->fetch_all(MYSQLI_ASSOC);
  
          foreach($conferencias1 as $conf){
            $i ++;
            $info = '
            <tr>
            <td>'.$i.'</td>
            <td><a class="bold" href="descripcionPropuesta.php?id='.$conf['id_conferencia'].'">'.$conf['conferencia'].'</a></td>         
            <td>'.$conf['modalidad'].'</td>
            <td>'.$conf['nombre'].'</td>
            <td>'.$conf['pais'].'</td>
            <td>'.$conf['ciudad'].'</td>
            <td>'.$conf['tema'].'</td>';
            $info.= $this->promedioPropuestasByIdConferencia($conf['id_conferencia']);
               if( $conf['status'] == NULL){
                $info.="<td><a class='noAceptada' href='aceptarPropuesta.php?id=".$conf['id_conferencia']."'>Aprobar</a> |
                <a class='rechazar' href='rechazarPropuesta.php?id=".$conf['id_conferencia']."'>Recahzar</a></td>
                ";
                        }
                        if($conf['status'] == 'aceptada'){
                          $info.= "<td class='aceptada'>Aceptada</a></td>";
                        }if($conf['status'] == 'rechazada'){
                          $info.= "<td class='rechazada'>Recahazada</a></td>";

                        }
            $info.= ' </tr>';
            echo $info;   
          }
        }

    }

    public function promedioPropuestasByIdConferencia($id){

      $sql= "SELECT COUNT(id_conferencia) AS total FROM calificar_propuestas
      WHERE id_conferencia = '$id'
      AND id_valor_respuesta IS NOT NULL";
      $resultado = $this->conexion_db->query($sql);
      $conferencias = $resultado->fetch_all(MYSQLI_ASSOC);

    $sql1 = "SELECT valor FROM calificar_propuestas 
    INNER JOIN valor_respuestas ON calificar_propuestas.id_valor_respuesta= valor_respuestas.id_respuesta
    WHERE id_conferencia= '$id'
    AND id_valor_respuesta IS NOT NULL";
    $resultado1 = $this->conexion_db->query($sql1);
    $conferencias1 = $resultado1->fetch_all(MYSQLI_ASSOC);
    
    
    $total=0;
    foreach($conferencias1 as $valor){
      $total_calificados = $valor['valor'];

      $total+= $total_calificados;
    }


    $promedio = $total/$conferencias[0]['total'];

    if($promedio <= '60'){
      $info = '
      <td class="rechazada">'.$promedio.'</td>
      ';
    }else{
      $info = '
      <td class="aceptada">'.$promedio.'</td>
      ';
    }


    return $info;
      



    }

    public function actualizarPregunta($id,$pregunta,$tipo_pregunta,$area,$congreso){

    $sql = "UPDATE preguntas
    SET pregunta='$pregunta',
    tipo = '$tipo_pregunta',
    area_calificar = '$area'
    WHERE id_pregunta='$id'";
    $resultado = $this->conexion_db->query($sql);

    return $resultado;

    }

    public function avanceCalificadorPorid(){


      $i= 0;

      $sql2 ="SELECT DISTINCT id_credencial FROM comite_tema";
      $resultado2 = $this->conexion_db->query($sql2);
      $resultado_consulta2 = $resultado2->fetch_all(MYSQLI_ASSOC);

      foreach($resultado_consulta2 as $comite){

        $user = $comite['id_credencial'];
        $sql3 = "SELECT * FROM credenciales 
        WHERE id_credencial = '$user'";
        $resultado3 = $this->conexion_db->query($sql3);
        $resultado_consulta3 = $resultado3->fetch_all(MYSQLI_ASSOC);

        foreach ($resultado_consulta3 as $pintarTabla){
          $i ++;
          $info = '
          <tr>
          <td>'.$i.'</td>
          <td>'.$pintarTabla['nombre'].'</td>';
          $info.=$this->calcularAvance($user);
          $info .= '</tr>';
          echo $info;  

        }

      }
    }

    public function calcularAvance($user){

      $array = [];


      $sql2 = "SELECT id_tema from comite_tema
      WHERE id_credencial ='$user'";
       $resultado2 = $this->conexion_db->query($sql2);
       $resultado_consulta2 = $resultado2->fetch_all(MYSQLI_ASSOC);

      foreach ($resultado_consulta2 as $arreglotema){
        array_push($array,$arreglotema['id_tema']);
      }
      $numerosuma = [];
      $temas_calificados = [];

      foreach ($array as $dato){
        $sql = "SELECT count(DISTINCT a.id_conferencia) as suma FROM conferencias AS a
        INNER JOIN aspirantes AS b
        ON a.id_conferencia = b.id_conferencia
        INNER JOIN temas on temas.id_tema = a.id_tema
        WHERE a.id_tema = '$dato'
        ";
    $resultado = $this->conexion_db->query($sql);
    $resultado_consulta = $resultado->fetch_all(MYSQLI_ASSOC);
    foreach ($resultado_consulta as $res){
      array_push($numerosuma,intval($res['suma']));

    }

    $sql1= "SELECT COUNT(DISTINCT id_conferencia) as tema
    FROM calificar_propuestas
    WHERE  id_tema = $dato";
    $resultado1 = $this->conexion_db->query($sql1);
    $resultado_consult1 = $resultado1->fetch_all(MYSQLI_ASSOC);

    foreach ($resultado_consult1 as $res1){
      array_push($temas_calificados,intval($res1['tema']));

    }

      }
      $total=0;
      $total1=0;

      foreach ($numerosuma as $value) {
        $total+=$value;
    }

    foreach($temas_calificados as $temas){
      $total1+=$temas;

    }

    
    $html= '
    <td>
    <progress id="file" max="100" value="'.intval(($total1/$total)*100).'"></progress>  '.intval(($total1/$total)*100).'%
    </td>
    ';

    return $html;
    }

    public function listarPreguntas(){

  
      $sql = "SELECT * FROM preguntas
              INNER JOIN tipo_pregunta ON preguntas.tipo = tipo_pregunta.id_tipo
      ";
          $resultado = $this->conexion_db->query($sql);
          $resultado_consulta = $resultado->fetch_all(MYSQLI_ASSOC);
          echo json_encode($resultado_consulta);

    


    }                  

    public function preguntaById($id_pregunta) {
      $sql = "SELECT * FROM preguntas
      WHERE id_pregunta = '$id_pregunta'";
          $resultado = $this->conexion_db->query($sql);
          $resultado_consulta = $resultado->fetch_all(MYSQLI_ASSOC);
          echo json_encode($resultado_consulta);
    }
    public function guardarNuevaPregunta($pregunta,$tipo_pregunta,$area,$congreso){

      if($tipo_pregunta == '1'){

        $sql1 = "INSERT INTO preguntas VALUES
        (null,'$pregunta','$tipo_pregunta','$area','$congreso')";
        $resultado1 = $this->conexion_db->query($sql1);

        if($resultado1){
          $sql = "SELECT max(id_pregunta) as id FROM preguntas";
          $resultado = $this->conexion_db->query($sql);
          $resultado_consulta = $resultado->fetch_all(MYSQLI_ASSOC);

          $variable = $resultado_consulta[0]['id'];

                $array = [
        ["id_valor_respuesta"=>'1','id_pregunta'=>$variable],
        ["id_valor_respuesta"=>'2','id_pregunta'=>$variable],
        ["id_valor_respuesta"=>'3','id_pregunta'=>$variable],
        ["id_valor_respuesta"=>'4','id_pregunta'=>$variable],
        ["id_valor_respuesta"=>'5','id_pregunta'=>$variable]

                        ];


          foreach($array as $indice =>$valor){

              $id_resp = $valor['id_valor_respuesta'];
            $id_preg = $valor['id_pregunta'];
            
            $sql3 = "INSERT INTO respuestas VALUES
            (null,'$id_resp','$id_preg')";
            $resultado3 = $this->conexion_db->query($sql3);       
            }

            return $resultado3;
        }
        
      }else{
        
      $sql2 = "INSERT INTO preguntas VALUES
      (null,'$pregunta','$tipo_pregunta','$area','$congreso')";
      $resultado2 = $this->conexion_db->query($sql2);
      return $resultado2;

      }

    }

    public function getPropuestaCalificada(){
      $sql ="SELECT DISTINCT id_calificacion, id_conferencia
      FROM calificar_propuestas
      GROUP BY id_conferencia
      ORDER BY id_tema asc";

        $resultado = $this->conexion_db->query($sql);
        $conferencias = $resultado->fetch_all(MYSQLI_ASSOC);

        $i=0;

        foreach($conferencias as $arr){
          // $sql="SELECT DISTINCT conferencias.id_conferencia, conferencias.conferencia, conferencias.modalidad, b.nombre,b.pais, b.ciudad,b.id_conferencia, conferencias.id_tema FROM conferencias
          // LEFT JOIN aspirantes AS b
          // ON conferencias.id_conferencia = b.id_conferencia
          // WHERE conferencias.id_tema = '$arr'
          // GROUP BY conferencias.id_conferencia
          // ";

          $id_conf = $arr['id_conferencia'];
  
          $sql1 = "SELECT DISTINCT a.id_conferencia, a.conferencia, a.modalidad, a.link, a.id_tema, a.id_congreso, b.nombre,
          b.apellidos, b.pais, b.ciudad ,temas.tema FROM conferencias AS a
          INNER JOIN aspirantes AS b
          ON a.id_conferencia = b.id_conferencia
          INNER JOIN temas on temas.id_tema = a.id_tema
          WHERE a.id_conferencia = '$id_conf'
          GROUP BY a.id_conferencia";
          $resultado1 = $this->conexion_db->query($sql1);
          $conferencias1 = $resultado1->fetch_all(MYSQLI_ASSOC);
  
          foreach($conferencias1 as $conf){
            $i ++;
            $info = '
            <tr>
            <td>'.$i.'</td>
            <td><a class="bold" href="descripcionPropuesta.php?id='.$conf['id_conferencia'].'">'.$conf['conferencia'].'</a></td>         
            <td>'.$conf['modalidad'].'</td>
            <td>'.$conf['nombre'].'</td>
            <td>'.$conf['pais'].'</td>
            <td>'.$conf['ciudad'].'</td>
            <td>'.$conf['tema'].'</td>
            <td class="text-center acciones"><a href="calificarPropuestas.php?id_conferencia='.$conf['id_conferencia'].'&id_congreso='.$conf['id_congreso'].'&id_tema='.$conf['id_tema'].'" class="link_encuesta"><i id="'.$conf['id_conferencia'].'" class="fi-checkbox size-72 num-'.$conf['id_conferencia'].' ocultar"></i></a>
            <a id="conferencia-'.$conf['id_conferencia'].'" href="editarPropuesta.php?id_conferencia='.$conf['id_conferencia'].'&id_congreso='.$conf['id_congreso'].'&id_tema='.$conf['id_tema'].'"  class="link_encuesta"><i class="fi-pencil edit-'.$conf['id_conferencia'].'"></i></a>
            </td>
            </tr>
            ';
            echo $info;   
          }
        }


    }

    public function getPropuestasByIdTema($array){

      foreach($array as $arr){
        // $sql="SELECT DISTINCT conferencias.id_conferencia, conferencias.conferencia, conferencias.modalidad, b.nombre,b.pais, b.ciudad,b.id_conferencia, conferencias.id_tema FROM conferencias
        // LEFT JOIN aspirantes AS b
        // ON conferencias.id_conferencia = b.id_conferencia
        // WHERE conferencias.id_tema = '$arr'
        // GROUP BY conferencias.id_conferencia
        // ";

        $sql = "SELECT DISTINCT a.id_conferencia, a.conferencia, a.modalidad, a.link, a.id_tema, a.id_congreso, b.nombre,
        b.apellidos, b.pais, b.ciudad ,temas.tema FROM conferencias AS a
        INNER JOIN aspirantes AS b
        ON a.id_conferencia = b.id_conferencia
        INNER JOIN temas on temas.id_tema = a.id_tema
        WHERE a.id_tema = '$arr'
        GROUP BY a.id_conferencia";
        $resultado = $this->conexion_db->query($sql);
        $conferencias = $resultado->fetch_all(MYSQLI_ASSOC);
        $i=0;

        foreach($conferencias as $conf){
          $i ++;
          $info = '
          <tr>
          <td>'.$i.'</td>
          <td><a class="bold" href="descripcionPropuesta.php?id='.$conf['id_conferencia'].'">'.$conf['conferencia'].'</a></td>         
          <td>'.$conf['modalidad'].'</td>
          <td>'.$conf['nombre'].'</td>
          <td>'.$conf['pais'].'</td>
          <td>'.$conf['ciudad'].'</td>
          <td>'.$conf['tema'].'</td>
          <td class="text-center acciones"><a alt="calificar" href="calificarPropuestas.php?id_conferencia='.$conf['id_conferencia'].'&id_congreso='.$conf['id_congreso'].'&id_tema='.$conf['id_tema'].'" class="link_encuesta"><i alt="algo" id="'.$conf['id_conferencia'].'" class="fi-checkbox size-72 num-'.$conf['id_conferencia'].'"></i></a>
          <a alt="editar" id="conferencia-'.$conf['id_conferencia'].'" href="editarPropuesta.php?id_conferencia='.$conf['id_conferencia'].'&id_congreso='.$conf['id_congreso'].'&id_tema='.$conf['id_tema'].'"  class="link_encuesta"><i alt="algo" class="fi-pencil edit-'.$conf['id_conferencia'].' ocultar"></i></a>
          </td>
          </tr>
          ';

          echo $info;

        }
      }

    }
    



    public function filtrarPorNumeroDeTema($tema){


      
      
      $sql = "SELECT DISTINCT a.id_conferencia, a.conferencia, a.modalidad, a.link, a.id_tema, a.id_congreso, b.nombre,
      b.apellidos, b.pais, b.ciudad FROM conferencias AS a
      INNER JOIN aspirantes AS b
      ON a.id_conferencia = b.id_conferencia
      WHERE a.id_tema = '$tema'
      GROUP BY a.id_conferencia";
      $resultado = $this->conexion_db->query($sql);
      $conferencias = $resultado->fetch_all(MYSQLI_ASSOC);
      $i=0;

      foreach($conferencias as $conf){
        $i ++;
        $info = '
        <tr>
        <td>'.$i.'</td>
        <td><a class="bold" href="descripcionPropuesta.php?id='.$conf['id_conferencia'].'">'.$conf['conferencia'].'</a></td>         
        <td>'.$conf['modalidad'].'</td>
        <td>'.$conf['nombre'].'</td>
        <td>'.$conf['pais'].'</td>
        <td>'.$conf['ciudad'].'</td>
        <td>'.$conf['id_tema'].'</td>
        <td class="text-center acciones"><a href="calificarPropuestas.php?id_conferencia='.$conf['id_conferencia'].'&id_congreso='.$conf['id_congreso'].'&id_tema='.$conf['id_tema'].'" class="link_encuesta"><i id="'.$conf['id_conferencia'].'" class="fi-checkbox size-72 num-'.$conf['id_conferencia'].'"></i></a>
        <a href="editarPropuesta.php?id_conferencia='.$conf['id_conferencia'].'&id_congreso='.$conf['id_congreso'].'&id_tema='.$conf['id_tema'].'"  class="link_encuesta"><i class="fi-pencil ocultar"></i></a>
        </td>
        </tr>
        ';

        echo $info;

      }


    }
    public function filtrarPorNumeroDeTemaCalificado($tema){


      $sql ="SELECT DISTINCT id_calificacion, id_conferencia
      FROM calificar_propuestas
      WHERE id_tema = '$tema'
      GROUP BY id_conferencia
      ORDER BY id_tema asc";

        $resultado = $this->conexion_db->query($sql);
        $conferencias = $resultado->fetch_all(MYSQLI_ASSOC);

        $i=0;

        foreach($conferencias as $arr){
          // $sql="SELECT DISTINCT conferencias.id_conferencia, conferencias.conferencia, conferencias.modalidad, b.nombre,b.pais, b.ciudad,b.id_conferencia, conferencias.id_tema FROM conferencias
          // LEFT JOIN aspirantes AS b
          // ON conferencias.id_conferencia = b.id_conferencia
          // WHERE conferencias.id_tema = '$arr'
          // GROUP BY conferencias.id_conferencia
          // ";

          $id_conf = $arr['id_conferencia'];
  
          $sql1 = "SELECT DISTINCT a.id_conferencia, a.conferencia, a.modalidad, a.link, a.id_tema, a.id_congreso, b.nombre,
          b.apellidos, b.pais, b.ciudad ,temas.tema FROM conferencias AS a
          INNER JOIN aspirantes AS b
          ON a.id_conferencia = b.id_conferencia
          INNER JOIN temas on temas.id_tema = a.id_tema
          WHERE a.id_conferencia = '$id_conf'
          GROUP BY a.id_conferencia";
          $resultado1 = $this->conexion_db->query($sql1);
          $conferencias1 = $resultado1->fetch_all(MYSQLI_ASSOC);
  
          foreach($conferencias1 as $conf){
            $i ++;
            $info = '
            <tr>
            <td>'.$i.'</td>
            <td><a href="descripcionPropuesta.php?id='.$conf['id_conferencia'].'">'.$conf['conferencia'].'</a></td>         
            <td>'.$conf['modalidad'].'</td>
            <td>'.$conf['nombre'].'</td>
            <td>'.$conf['pais'].'</td>
            <td>'.$conf['ciudad'].'</td>
            <td>'.$conf['tema'].'</td>
            <td class="text-center acciones">
            <a href="calificarPropuestas.php?id_conferencia='.$conf['id_conferencia'].'&id_congreso='.$conf['id_congreso'].'&id_tema='.$conf['id_tema'].'" class="link_encuesta"><i id="'.$conf['id_conferencia'].'" class="fi-checkbox size-72 num-'.$conf['id_conferencia'].' ocultar"></i></a>
            <a id="conferencia-'.$conf['id_conferencia'].'" href="editarPropuesta.php?id_conferencia='.$conf['id_conferencia'].'&id_congreso='.$conf['id_congreso'].'&id_tema='.$conf['id_tema'].'"  class="link_encuesta"><i class="fi-pencil edit-'.$conf['id_conferencia'].'"></i></a>
            </td>
            </tr>
            ';
  
            echo $info; 
  
          }
        }


      
    


    }

    public function guardarPreguntasBD($arreglo,$id_congreso,$id_tema,$id_conferencia,$id_usuario){

    

      // $pregunta4 = !empty($v4) ? "'$v4'" : "NULL";

foreach($arreglo as $indice =>$valor){

if ($valor == 'Excelente') {
  $id_valor_resp = "'1'";
} elseif ($valor == 'Muy Bien') {
  $id_valor_resp = "'2'";
} elseif ($valor == 'Bien') {
  $id_valor_resp = "'3'";
}elseif($valor == 'Regular'){
  $id_valor_resp = "'4'";
}elseif($valor == 'Mala'){
  $id_valor_resp = "'5'";
}else{
  $id_valor_resp = "NULL";
}



  $sql = "INSERT INTO calificar_propuestas VALUES
  (null,'$indice','$valor',$id_valor_resp,'$id_conferencia','$id_tema','$id_usuario')";
  $resultado = $this->conexion_db->query($sql);



}
return $resultado;
 

      
      // return $resultado;

    }

    public function actualizarRespuestasBD($arreglo,$id_congreso,$id_tema,$id_conferencia,$id_usuario){

    

      // $pregunta4 = !empty($v4) ? "'$v4'" : "NULL";

  $sql1 = "DELETE FROM calificar_propuestas WHERE id_conferencia = '$id_conferencia' AND id_usuario='$id_usuario'";
  $resultado1 = $this->conexion_db->query($sql1);

  $sql4= 'SET @num := 0';
  $resultado5 = $this->conexion_db->query($sql4);

  $sql2 ="  UPDATE calificar_propuestas SET id_calificacion = @num := (@num+1)";
  $resultado2 = $this->conexion_db->query($sql2);
  $sql3 ="ALTER TABLE calificar_propuestas AUTO_INCREMENT = 1";
  $resultado3 = $this->conexion_db->query($sql3);

  
  

foreach($arreglo as $indice =>$valor){


  if ($valor == 'Excelente') {
    $id_valor_resp = "'1'";
  } elseif ($valor == 'Muy Bien') {
    $id_valor_resp = "'2'";
  } elseif ($valor == 'Bien') {
    $id_valor_resp = "'3'";
  }elseif($valor == 'Regular'){
    $id_valor_resp = "'4'";
  }elseif($valor == 'Mala'){
    $id_valor_resp = "'5'";
  }else{
    $id_valor_resp = "NULL";
  }
  
  $sql = "INSERT INTO calificar_propuestas VALUES
  (null,'$indice','$valor',$id_valor_resp,'$id_conferencia','$id_tema','$id_usuario')";
  $resultado = $this->conexion_db->query($sql);



}
return $resultado;
 

      

    }

    

    // public function getArreglo(){
    //   $sql = "SELECT respuesta FROM respuestas
    //   WHERE id_respuesta = 2";
    //   $resultado = $this->conexion_db->query($sql);
    //   $conferencias = $resultado->fetch_all(MYSQLI_ASSOC);

    //   return $conferencias;
    // }

    public function preguntas(){
      $html="";
      $sql = "SELECT * FROM preguntas
      INNER JOIN area_conferencia ON preguntas.area_calificar = area_conferencia.id_area
      GROUP BY area_calificar
      ORDER BY area_calificar
      ";
      $resultado = $this->conexion_db->query($sql); 
      $conferencias = $resultado->fetch_all(MYSQLI_ASSOC);






      foreach($conferencias as $preguntas){
    
        $html.='<div id="'.$preguntas['id_pregunta'].'" class="column medium-12">
        <h5 class="unique"><b>-'.$preguntas['nombre_area'].'</b></h5>';
        $html.=$this->preg($preguntas['area_calificar']);
        $html.= '</div>';


      }

      return $html;



    }

    public function preg($id){
      $html="";
      $sql = "SELECT * FROM preguntas
      INNER JOIN area_conferencia ON preguntas.area_calificar = area_conferencia.id_area
      WHERE area_calificar = '$id'
      ORDER BY area_calificar
      ";
      $resultado = $this->conexion_db->query($sql); 
      $conferencias = $resultado->fetch_all(MYSQLI_ASSOC);






      foreach($conferencias as $preguntas){
        $nombre_tema = $preguntas['nombre_area'];

        $titulo = $preguntas['nombre_area'];


        if($preguntas['tipo']==1 ){
          $html .=  '
          
          <div id="'.$preguntas['id_pregunta'].'" class="column medium-8">
          ';


          $html .='<label for=""><b>'.$preguntas['pregunta'].'</b></label><br>';

         $html.= $this->respuestachecks($preguntas['id_pregunta']);
          $html.='</div>';

        }

        if($preguntas['tipo']==2){
          $html .=  '
          <div id="'.$preguntas['id_pregunta'].'" class="column medium-8">
          
          <label for=""><b>'.$preguntas['pregunta'].'</b></label><br>
          <input type="text" name="'.$preguntas['id_pregunta'].'"  placeholder="Razon" >
          </div>';
        }

        if($preguntas['tipo']==3){
          $html .=  '
          <div id="'.$preguntas['id_pregunta'].'" class="column medium-8">
          <label for=""><b>'.$preguntas['pregunta'].'</b></label><br>
         ';
          $html.= $this->consultaPregunta();
          $html.=' </div>';
 
        }  
      
      }

      return $html;

    }

    public function tituloConferencia($id){

      $html = "";
      $sql1 = "SELECT * FROM preguntas
      INNER JOIN area_conferencia ON preguntas.area_calificar = area_conferencia.id_area
      WHERE preguntas.area_calificar = '$id'
      GROUP BY preguntas.area_calificar
      
      ";
       $resultado1 = $this->conexion_db->query($sql1); 
       $conferencias1 = $resultado1->fetch_all(MYSQLI_ASSOC);

      foreach($conferencias1 as $i=> $conf){

        $titulo = $conf['nombre_area'];

        $html .= '<h5 class="unique"><b>-'.$titulo.'</b></h5>';

      }


      
      return $html;

    }


    public function pregContestadas($conferencia,$usuario){

      $html="";
      $sql = "SELECT * FROM preguntas
      INNER JOIN area_conferencia ON preguntas.area_calificar = area_conferencia.id_area
      GROUP BY area_calificar
      ORDER BY area_calificar
      ";
      $resultado = $this->conexion_db->query($sql); 
      $conferencias = $resultado->fetch_all(MYSQLI_ASSOC);






      foreach($conferencias as $preguntas){
    
        $html.='<div id="'.$preguntas['id_pregunta'].'" class="column medium-12">
        <h5 class="unique"><b>-'.$preguntas['nombre_area'].'</b></h5>';
        $html.=$this->preguntasContestadas($preguntas['area_calificar'],$conferencia,$usuario);
        $html.= '</div>';


      }

      return $html;


    }


    public function preguntasContestadas($id,$conferencia,$usuario){

      $html="";
      $sql = "SELECT * FROM preguntas
      INNER JOIN area_conferencia ON preguntas.area_calificar = area_conferencia.id_area
      WHERE area_calificar = '$id'
      ORDER BY area_calificar

      ";
      $resultado = $this->conexion_db->query($sql); 
      $conferencias = $resultado->fetch_all(MYSQLI_ASSOC);

      



      foreach($conferencias as $preguntas){

        if($preguntas['tipo']==1){
          $html .=  '
          <div id="'.$preguntas['id_pregunta'].'" class="column medium-8">
          <label for=""><b>'.$preguntas['pregunta'].'</b></label><br>';

         $html.= $this->respuestachecksContestadas($preguntas['id_pregunta'],$conferencia,$usuario);
          $html.='</div>';

        }


        if($preguntas['tipo']==2){

          $html.=' <div id="'.$preguntas['id_pregunta'].'" class="column medium-8">
          <label for=""><b>'.$preguntas['pregunta'].'</b></label><br>';
          $html.= $this->consultaInputContestados($preguntas['id_pregunta'],$conferencia,$usuario);
          $html.='</div>';

        }

        if($preguntas['tipo']==3){

          $html .=  '
          <div id="'.$preguntas['id_pregunta'].'" class="column medium-8">
          <label for=""><b>'.$preguntas['pregunta'].'</b></label><br>
         ';
          
          $html.= $this->consultaPreguntaContestadas($preguntas['id_pregunta'],$conferencia,$usuario);
          $html.='</div>';

        }

          
      }

      return $html;

    }

    public function respuestachecksContestadas($id,$conferencia,$usuario){
      $html = '';
      $sql = "SELECT * FROM respuestas
      INNER JOIN valor_respuestas ON valor_respuestas.id_respuesta = respuestas.id_valor_respuesta
      WHERE respuestas.id_pregunta = '$id'";
      $resultado = $this->conexion_db->query($sql);
      $conferencias = $resultado->fetch_all(MYSQLI_ASSOC);

      $sql1 = "SELECT * FROM calificar_propuestas
      WHERE id_conferencia = '$conferencia' 
      AND id_usuario='$usuario'
      AND id_valor_respuesta IS NOT NULL
      AND id_pregunta = '$id'";
      $resultado1 = $this->conexion_db->query($sql1);
      $respuestas_usuario = $resultado1->fetch_all(MYSQLI_ASSOC);

      $id_cat_array = [];



      // foreach($respuestas_usuario as $datos){
  
      //   $id_cat = $datos['id_valor_respuesta'];

      //   array_push($id_cat_array, $id_cat );
  
      // }
   

      
      foreach($conferencias as $respuestas =>$i){
        $nombre = $i['id_valor_respuesta'];
        $resp = $i['valor_input'].'-'.$i['respuesta'];


        foreach($respuestas_usuario as $datos){
          
                $id_cat = $datos['id_valor_respuesta'];

                array_push($id_cat_array, $id_cat );
          
              }

        


        

        if (in_array($nombre,$id_cat_array)){
          $Marcado = ' checked="checked"';
      } else {
          $Marcado='';
      }

        $name = 'name='.$id;

        $html.='<input type="radio" '.$name.' id="html" '.$Marcado.'  value="'.$i['respuesta'].'">
        <label for="html">'.$resp.'</label><br>';

      }
      return $html;


    }


    public function consultaPreguntaContestadas($id,$conferencia,$usuario){
    

      $html="";

      $sql = "SELECT * FROM preguntas
      WHERE tipo = 'consulta'";
      $resultado = $this->conexion_db->query($sql);
      $conferencias = $resultado->fetch_all(MYSQLI_ASSOC);

      $sql1 = "SELECT * FROM temas
      WHERE id_tema >1 
      AND id_tema<8";
      $resultado1 = $this->conexion_db->query($sql1);
      $respuestas = $resultado1->fetch_all(MYSQLI_ASSOC);


      $sql2 = "SELECT * FROM calificar_propuestas
      WHERE id_conferencia = '$conferencia' 
      AND id_usuario='$usuario'";
      $resultado2 = $this->conexion_db->query($sql2);
      $respuestas1 = $resultado2->fetch_all(MYSQLI_ASSOC);

      $id_cat_array = [];
      foreach($respuestas1 as $datos){
  
        $id_cat = $datos['respuesta'];
  
        array_push($id_cat_array, $id_cat );
  
      }

  
      foreach($respuestas as $resp){

        $nombre = $resp['tema'];

        if (in_array($nombre,$id_cat_array)){
          $Marcado = ' checked';
      } else {
          $Marcado='';
      }


      $html.='<input type="radio" id="html" '.$Marcado.' name="'.$id.'" value="'.$resp['tema'].'">
      <label for="html">'.$resp['tema'].'</label><br>';
      }

      return $html;
 
    }

    public function consultaInputContestados($id,$conferencia,$usuario){
      $html="";


     

      $sql1 = "SELECT * FROM calificar_propuestas
      WHERE id_conferencia = '$conferencia' 
      AND id_usuario='$usuario'
      AND id_pregunta = $id";
      $resultado1 = $this->conexion_db->query($sql1);
      $respuestas_usuario = $resultado1->fetch_all(MYSQLI_ASSOC);


      foreach($respuestas_usuario as $respuestas =>$i){


        $html.='
        <input type="text" name="'.$i['id_pregunta'].'" value="'.$i['respuesta'].'"  placeholder="Razon" >
        ';


      }
      return $html;


    }
    public function consultaPregunta(){

      $html="";

      $sql = "SELECT * FROM preguntas
      WHERE tipo = 'consulta'";
      $resultado = $this->conexion_db->query($sql);
      $conferencias = $resultado->fetch_all(MYSQLI_ASSOC);

      $sql1 = "SELECT * FROM temas
      WHERE id_tema >1 
      AND id_tema<8";
      $resultado1 = $this->conexion_db->query($sql1);
      $respuestas = $resultado1->fetch_all(MYSQLI_ASSOC);

    

      foreach($respuestas as $resp){
      $html.='<input type="radio" id="html" name="5" value="'.$resp['tema'].'">
      <label for="html">'.$resp['tema'].'</label><br>';
      }

      return $html;
 
    }

    public function respuestachecks($id){
      $html = '';
      $sql = "SELECT * FROM respuestas
      INNER JOIN valor_respuestas ON valor_respuestas.id_respuesta = respuestas.id_valor_respuesta
      WHERE id_pregunta = '$id'"
      
      ;
      $resultado = $this->conexion_db->query($sql);
      $conferencias = $resultado->fetch_all(MYSQLI_ASSOC);

      

      
      foreach($conferencias as $respuestas =>$i){
        $resp = $i['valor_input'].'-'.$i['respuesta'];

        $name = 'name='.$id;

        $html.='<input type="radio" '.$name.' id="html"  value="'.$i['respuesta'].'">
        <label for="html">'.$resp.'</label><br>';
      }

      return $html;


    }

    public function propuestasCalifcadasPorUsuario($id){
      $sql = "SELECT * FROM calificar_propuestas
      WHERE id_usuario = '$id'";
      $resultado = $this->conexion_db->query($sql); 
      $conferencias = $resultado->fetch_all(MYSQLI_ASSOC);

      echo json_encode($conferencias);
    }

    public function listaConferencias($evento){
      $sql = "SELECT * FROM conferencias
      WHERE status = 'aceptada'
      AND id_congreso = '$evento'
      ORDER BY id_conferencia DESC";
      $resultado = $this->conexion_db->query($sql);
      $conferencias = $resultado->fetch_all(MYSQLI_ASSOC);
      return $conferencias;
    }

    public function temas(){
      $sql = "SELECT * FROM temas";
      $resultado = $this->conexion_db->query($sql);
      $tipoConferencia = $resultado->fetch_all(MYSQLI_ASSOC);
      return $tipoConferencia;
    }

    public function conferenciaTipo(){
      $sql = "SELECT * FROM tipo_conferencia";
      $resultado = $this->conexion_db->query($sql);
      $tipoConferencia = $resultado->fetch_all(MYSQLI_ASSOC);
      return $tipoConferencia;
    }

    public function mostrarConferencia($id){
      $resultado = $this->conexion_db->query("SELECT a.conferencia,
      a.conferencia_ing, a.conferencia_port, a.id_tema, a.id_tipo, a.descripcion, a.descripcion_ing, a.descripcion_port, a.objetivo1,
      a.objetivo2, a.objetivo3, a.fecha,
      a.inicio, a.fin, a.salon, b.id_tema, b.tema, t.tipo
      FROM conferencias AS a
      LEFT JOIN temas as b ON b.id_tema = a.id_tema
      LEFT JOIN tipo_conferencia as t ON t.id_tipo = a.id_tipo
      WHERE id_conferencia = '$id' ");
      $respuesta = $resultado->fetch_all(MYSQLI_ASSOC);
      return $respuesta;
    }

    public function registrar($conferencia, $conferencia_ing, $conferencia_port, $fecha, $hora, $hora_fin,
                                      $lugar, $tema, $tipo, $descripcion, $descripcion_ing,
                                      $descripcion_port, $objetivo1, $objetivo2, $objetivo3, $evento){
      $sql = "INSERT INTO conferencias VALUES
      (null, '$conferencia', '$conferencia_ing', '$conferencia_port', '$tema', '$tipo', '$descripcion',
      '$descripcion_ing', '$descripcion_port', null, '$objetivo1', '$objetivo2', '$objetivo3', null,
      NULL, NULL, NULL, 'aceptada', '$fecha', '$hora', '$hora_fin', '$lugar', null, '$evento')";
      $resultado = $this->conexion_db->query($sql);
      return $resultado;
    }

    public function actualizar($conferencia, $conferencia_ing, $conferencia_port, $fecha, $hora, $hora_fin,
                                      $lugar, $tema, $tipo, $descripcion, $descripcion_ing, $descripcion_port,
                                      $objetivo1, $objetivo2, $objetivo3, $id){
    $sql = "UPDATE conferencias SET
              conferencia = '$conferencia',
              conferencia_ing = '$conferencia_ing',
              conferencia_port = '$conferencia_port',
              id_tema = '$tema',
              id_tipo = '$tipo',
              descripcion = '$descripcion',
              descripcion_ing = '$descripcion_ing',
              descripcion_port = '$descripcion_port',
              objetivo1 = '$objetivo1',
              objetivo2 = '$objetivo2',
              objetivo3 = '$objetivo3',
              fecha = '$fecha',
              inicio = '$hora',
              fin = '$hora_fin',
              salon = '$lugar'
              WHERE id_conferencia = '$id' ";

      $resultado = $this->conexion_db->query($sql);

      return $resultado;
    }

    public function eliminar($id)
    {

     $sql = $this->conexion_db->query("DELETE FROM conferencias WHERE id_conferencia = $id ");

     return $sql;

    }

    public function linkGoogleCalendar($idConferencia)
    {

      $resultado = $this->conexion_db->query("SELECT a.conferencia,
      a.conferencia_ing, a.conferencia_port, a.id_tema, a.id_tipo, a.descripcion, a.descripcion_ing, a.descripcion_port, a.objetivo1,
      a.objetivo2, a.objetivo3, a.fecha,
      a.inicio, a.fin, a.salon, b.id_tema, b.tema, t.tipo
      FROM conferencias AS a
      LEFT JOIN temas as b ON b.id_tema = a.id_tema
      LEFT JOIN tipo_conferencia as t ON t.id_tipo = a.id_tipo
      WHERE id_conferencia = '$idConferencia' ");
      $data = $resultado->fetch_all(MYSQLI_ASSOC);

      $data = json_encode($data[0]);
      $data = json_decode($data);

      $titulo = $data->conferencia;
      $descripcion = 'descripcion';
      $localizacion = 'San Pedro, Monterrey, México';
      $start=new DateTime($data->fecha.' '.$data->inicio.' '.date_default_timezone_get());
      $end=new DateTime($data->fecha.' '.$data->fin.' '.date_default_timezone_get()); $dates = urlencode($start->format("Ymd\THis")) . "/" . urlencode($end->format("Ymd\THis"));
      $name = 'Congreso Parques San Pedro 2022';
      $url = 'congresoparques.com';
      $gCalUrl = "http://www.google.com/calendar/event?action=TEMPLATE&amp;text=$titulo&amp;dates=$dates&amp;details=$descripcion&amp;location=$localizacion&amp;trp=false&amp;sprop=$url&amp;sprop=name:$name";
      return ($gCalUrl);
    }

  }

 ?>
