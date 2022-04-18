<?php
include('../class/funciones.php');
// var_dump($_GET["id"]);

$listaTemas = new Tema();

$temas = $listaTemas->listaTemas($_GET["id"]);

echo $temas;

?>