<?php

require ('./../cpanel/class/conexion.php');
include ('class/classRegistroPropuesta.php');

if($_SERVER['REQUEST_METHOD'] === 'POST')
{

}

  $registro = new Registro();
  // datos personales del conferencista
  $nombre = $_POST['Nombre'];
  $apellido = $_POST['Apellidos'];
  $email = $_POST['Email'];
  $emailAsis = $_POST['EmailAsistente'];
  $telefono = $_POST['Telefono'];
  $cargo = $_POST['Cargo'];
  $empresa = $_POST['Empresa'];
  $pais = $_POST['Pais'];
  $ciudad = $_POST['Ciudad'];
  $experiencia = $_POST['Experiencia'];
  $nombre_foto = $_FILES['fotografia']['name'];
  $tipo_foto = $_FILES['fotografia']['type'];
  $temporal_foto = $_FILES['fotografia']['tmp_name'];
  
  $array = count($_POST['Nombre']);
  
  
  
  // Datos sobre la sesión educativa
  $sesion = filtrado($_POST['Sesion']);
  $tema = $_POST['Tema'];
  $modalidadSesion = $_POST['modalidadSesion'];
  $descripcion = filtrado($_POST['Descripcion']);
  $justificacion = filtrado($_POST['Justificacion']);
  $objetivo1 = filtrado($_POST['Objetivo1']);
  $objetivo2 = filtrado($_POST['Objetivo2']);
  $objetivo3 = filtrado($_POST['Objetivo3']);
  $modalidad = $_POST['Modalidad'];
  $enlace1 = $_POST['Enlace1'];
  $enlace2 = $_POST['Enlace2'];
  $enlace3 = $_POST['Enlace3'];
  $evento = $_POST['Evento'];
  // $nombre_documento= $_FILES['archivo']['name'];
  // $tipo_documento = $_FILES['archivo']['type'];
  // $temporal_documento = $_FILES['archivo']['tmp_name'];
  
  
  $sesion = $registro->registroPropuesta($sesion, $tema, $descripcion, $justificacion, 
                                        $objetivo1, $objetivo2, $objetivo3 , $modalidadSesion, 
                                        $enlace1, $enlace2, $enlace3, $evento);
  
  $aspirante = $registro->registroAspirante($array, $nombre, $apellido, $email,
                                                $emailAsis, $telefono, $cargo, $empresa,
                                              $pais, $ciudad, $experiencia, $nombre_foto,
                                              $tipo_foto, $temporal_foto, $evento);
  
  if ( $aspirante == true && $sesion == true ) {
    //Envío del correo al encargado de contenido
    // $envioCorreo = $registro->correoRegistroPropuesta($email);
    // $envioCorreo = $registro->avisoNuevaSesion($nombre, $apellido);
    echo header("Location: thanks.html");
  
  }
  else{
    echo" 
    <script language='JavaScript'>
        alert('Error: No pudimos realizar el registro');
        </script>";
    echo "<script>window.history.go(-1);</script>";
  }
  
  function filtrado($datos){
    $datos = trim($datos); // Elimina espacios antes y después de los datos
    $datos = stripslashes($datos); // Elimina backslashes \
    $datos = addslashes($datos); // Inserta un \ para los apostrofes del texto (textos en inglés)
    $datos = htmlspecialchars($datos); // Traduce caracteres especiales en entidades HTML
    return $datos;
  }
  
  
   ?>