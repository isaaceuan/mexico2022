<?php

namespace App;

class ActiveRecord{
  
  // Base DE DATOS
  protected static $conexion_db;

  // Definir la conexión a la BD
  public static function setDB($database) {
    self::$conexion_db = $database;
  }

}

?>