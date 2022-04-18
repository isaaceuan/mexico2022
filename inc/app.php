<?php 

require 'funciones.php';
require 'config/database.php';
require __DIR__ . '/../vendor/autoload.php';

//conectar BD
$conexion_db = conectarDB();

use App\ActiveRecord;
ActiveRecord::setDB($conexion_db);
// ActiveRecord::setDB($conexion_db);



