<?php
class Posters extends Conexion{

    public function __construct(){

      parent::__construct();

    }

    public function getPosters(){

        $html = "";
        $sql = "SELECT * FROM posters";

        $resultado = $this->conexion_db->query($sql);
  
        $respuesta = $resultado->fetch_all(MYSQLI_ASSOC);

        $i = 0;

  foreach($respuesta as $resp){
            $doc = $resp['documento'];
            $poster = $resp['poster'];

            $i++;
            $html .= '<tr>
            <td class="text-center">'.$i.'</td>
            <td class="text-center">'.$resp['nombre'].'</td>
            <td class="text-center">'.$resp['email'].'</td>
            <td class="text-center">'.$resp['telefono'].'</td>
            <td class="text-center">'.$resp['empresa'].'</td>
            <td class="text-center">'.$resp['ciudad'].'</td>';

            if(!empty($doc)){
           $html .='<td class="text-center"><a download href="https://worldurbanparkscongress.com/img/uploads/'.$resp['documento'].'"><i class="fi-page-export"></i></a></td>
            ';
            }else{
            $html .='<td class="text-center">No disponible</td>
            ';
            }
            if( !empty($poster)){
                $html .='
                 <td class="text-center"><a download href="https://worldurbanparkscongress.com/img/uploads/'.$resp['poster'].'"><i class="fi-page-csv"></i></a></td>
                 ';
                 }else{
                 $html .='
                 <td class="text-center">No disponible</td>
                 ';
             }
             
            $html .=' <td class="text-center acciones">
            <a href="eliminarPoster.php?id='.$resp['id_poster'].'"  class="borrar"><i class="fi-trash borrar"></i></a>

            
            
            </td>';

             $html .='</tr>';
        }

        echo $html;

    }

    public function eliminarPoster($id){
        $sql = "DELETE FROM posters WHERE id_poster='$id'";
        $resultado = $this->conexion_db->query($sql);

        return $resultado;
    }

}
?>