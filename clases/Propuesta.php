<?
namespace App;

class Propuesta extends ActiveRecord{

  //mapear los datos
  protected static $columnasDB = ['id_conferencia', 'conferencia', 'id_tema', 'id_tipo', 'descripcion', 'justificacion', 'objetivo1', 'objetivo2', 'objetivo3', 'modalidad', 'enlace1', 'enlace2', 'enlace3', 'status', 'fecha', 'inicio', 'fin', 'salon', 'link', 'id_congreso'];

  public $id_conferencia;
  public $conferencia;
  public $id_tema;
  public $id_tipo;
  public $descripcion;
  public $justificacion;
  public $objetivo1;
  public $objetivo2;
  public $objetivo3;
  public $modalidad;
  public $enlace1;
  public $enlace2;
  public $enlace3;
  public $status;
  public $fecha;
  public $inicio;
  public $fin;
  public $salon;
  public $link;
  public $id_congreso;


  public function __construct($args = [])
  {
    $this->id_conferencia = $args['id_conferencia'] ?? '';
    $this->conferencia = $args['conferencia'] ?? '';
    $this->id_tema = $args['id_tema'] ?? '';
    $this->id_tipo = $args['id_tipo'] ?? '';
    $this->descripcion = $args['descripcion'] ?? '';
    $this->justificacion = $args['justificacion'] ?? '';
    $this->objetivo1 = $args['objetivo1'] ?? '';
    $this->objetivo2 = $args['objetivo2'] ?? '';
    $this->objetivo3 = $args['objetivo3'] ?? '';
    $this->modalidad = $args['modalidad'] ?? '';
    $this->enlace1 = $args['enlace1'] ?? '';
    $this->enlace2 = $args['enlace2'] ?? '';
    $this->enlace3 = $args['enlace3'] ?? '';
    $this->status = $args['status'] ?? '';
    $this->fecha = $args['fecha'] ?? '';
    $this->inicio = $args['inicio'] ?? '';
    $this->fin = $args['fin'] ?? '';
    $this->salon = $args['salon'] ?? '';
    $this->link = $args['link'] ?? '';
    $this->id_congreso = $args['id_congreso'] ?? '';
  }


  public function registroPropuesta($sesion, $tipoSesion, $modalidadSesion, $subtema, 
                                    $desc, $just, $mod, 
                                  $enlace1, $enlace2, $enlace3, $evento){

    $sql = $this->conexion_db->query("INSERT INTO conferencias VALUES (null, null, '$sesion', null, 
                                    '1', '$tipoSesion', '$modalidadSesion', '$subtema', null, 
                                    '$desc', null, '$just', null, null, 
                                    null, '$mod', '$enlace1', '$enlace2', '$enlace3', null, null, null, 
                                    null, null, null, '$evento')");
    return $sql;

  }

  public function asignarId(){

    $resultado = $this->conexion_db->query('SELECT max(id_conferencia) AS max_idconfe FROM conferencias');

    $respuesta = $resultado->fetch_all(MYSQLI_ASSOC);

    foreach ($respuesta as $valor) {
    $id = $valor['max_idconfe'];
    }

    return $id;

  }

public function registroAspirante($array, $nom, $ap, $em, $em2, $tel, $cargo, $emp, $pais, $ciudad, $exp,
                                   $nomf, $tipof, $tempf, $evento)
{                    
  $id_sesion = $this->asignarId();

    
    // $ap[$i], $em[$i], $em2[$i], $tel[$i], $cargo[$i], $emp[$i], $pais[$i], $ciudad[$i], $exp[$i], $nomf[$i], $id_sesion ;

   $sql = $this->conexion_db->query("INSERT INTO aspirantes
                                 VALUES (null, '$nom', '$ap', '$em', '$em2', '$tel', 
                                 '$cargo', '$emp', '$pais', '$ciudad', '$exp', '$nomf[$i]', 
                                 '$id_sesion', '$evento') ");

                                 var_dump('$nom', '$ap', '$em', '$em2', '$tel', 
                                 '$cargo', '$emp', '$pais', '$ciudad', '$exp', '$nomf[$i]', 
                                 '$id_sesion', '$evento');
                                //  die();
                                //Servidor de internet
                                $destino_foto = $_SERVER['DOCUMENT_ROOT'].'/img/uploads/';

                                //Servidor localhost
                                //  $destino_foto = $_SERVER['DOCUMENT_ROOT'].'/worldparkscongress/img/uploads/';

                                if ($sql){
                                  echo move_uploaded_file($tempf[$i], $destino_foto.$nomf[$i]);
                                }




   return $sql;

 }
  

}

?>
