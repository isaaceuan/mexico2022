<?php

DEFINE ('DB_USUARIO', 'root');
  // DEFINE ('DB_USUARIO', 'u506969443_it');

DEFINE('DB_CONTRASENA', '');
// DEFINE('DB_CONTRASENA', 'Wup2022*');

DEFINE ('DB_NOMBRE', 'wupcongress');
// DEFINE ('DB_NOMBRE', 'u506969443_congress');

DEFINE ('DB_SERVER', 'localhost');
// DEFINE ('DB_SERVER', 'mysql.hostinger.mx');

DEFINE ('DB_CHARSET', 'UTF8');


function conectarDB(){

  $conexion_db = new mysqli(DB_SERVER, DB_USUARIO, DB_CONTRASENA, DB_NOMBRE);

  if (!$conexion_db) 
  {
    echo "Error al conectar MySql";

    exit;
  }

    return $conexion_db;
    
}
