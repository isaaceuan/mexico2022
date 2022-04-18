<?php

// require("app.php");

define('TEMPLATES_URL', __DIR__. '/templates');
define('FUNCIONES:URL', __DIR__. 'funciones.php');

function incluirTemplate($nombre){
  include TEMPLATES_URL . "/${nombre}.php";
}

//mostrar la información 
function debuguear($variable){
  echo "<pre>";
  var_dump($variable);
  echo "</pre>";
  exit;
}
