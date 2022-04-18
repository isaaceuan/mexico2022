<?php
require '../inc/app.php';
use App\Poster;

if($_SERVER['REQUEST_METHOD'] === 'POST')
{
  $datos = new Poster($_POST);

  $documento = $_FILES['documento'];
  $poster = $_FILES['poster'];

  $datos->guardar();

  if($datos){
    $datos->guardarDocumentos($documento, $poster);
    $datos ? header("Location: thanks.html") : "Database Error"; 
  }

  
}
else{
  echo "Data has not been sent";
}
?>