<?php
class Eventos extends Conexion{
  public function __construct(){
      parent::__construct();
  }
  public function eventos($congreso){
    $sql = "SELECT * FROM eventos_sociales WHERE id_congreso = '$congreso' ";
    $consulta = $this->conexion_db->query($sql);
    $resultado = $consulta->fetch_all(MYSQLI_ASSOC);
    return $resultado;
  }

  
}
?>