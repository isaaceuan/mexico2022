<?php

namespace App;

class Tema extends ActiveRecord{

  //mapear los datos
  protected static $columnasDB = ['id_tema', 'tema', 'tema_ing', 'descripcion', 'descripcion_ing', 'icono', 'id_congreso'];

  public $id_tema;
  public $tema;
  public $tema_ing;
  public $descripcion;
  public $descripcion_ing;
  public $icono;
  public $id_congreso;

  public function __construct($args = [])
  {
    $this->id_tema = $args['id_tema'] ?? '';
    $this->tema = $args['tema'] ?? '';
    $this->tema_ing = $args['tema_ing'] ?? '';
    $this->descripcion = $args['descripcion'] ?? '';
    $this->descripcion_ing = $args['descripcion_ing'] ?? '';
    $this->icono = $args['icono'] ?? '';
    $this->id_congreso = $args['id_congreso'] ?? '';
  }

  public function guardar(){
    
    //sanitizar datos
    $datos = $this->sanitizarDatos();

    //crear un string a partir de un arreglo
    //acceder a los indices del arreglo
    //  join(', ', array_keys($datos));
    //acceder a los valores del arreglo
    //  join(', ', array_values($datos));

    $query = "INSERT INTO temas ( ";
    $query .=join(', ', array_keys($datos));
    $query .= " ) VALUES (' ";
    $query .= join("', '", array_values($datos));
    $query .= " ')";

    $resultado = self::$conexion_db->query($query);
  }

  public function sanitizarDatos(){
    $datos = $this->datos();
    $sanitizado = [];
    foreach($datos as $key => $value){
      $sanitizado[$key] = self::$conexion_db->escape_string($value);
    }
    return $sanitizado;  
  }

  //identifica y une los atributos de la Bd
  public function datos(){
    $datos = [];
    foreach(self::$columnasDB as $columna){
      if ($columna === 'id_tema') continue; //ignora la columna de id_tema
      $datos[$columna] = $this->$columna; //referencia al objeto en memoria
    }
    return $datos;
  }

  //Listar todos los temas correspondientes
  public static function all(){
    $query = "SELECT * FROM temas";
    $resultado = self::consultarSQL($query);

    return $resultado;

  }

  public static function consultarSQL($query){
    //consultar Bd
    $resultado = self::$conexion_db->query($query);

    //Iterar los resultados
    $array = [];
    while($registro = $resultado->fetch_assoc()){
      $array[] = self::crearObjeto($registro);
    }

    // debuguear($array);
    //liberar la memoria
    $resultado -> free();

    //retornar los reultados
    return $array;

  }

  protected static function crearObjeto($registro){
    //una nueva propiedad (objetos de la clase actual)
    $objeto = new self;

    foreach($registro as $key => $value){
      //verifica que el objeto tiene los mismos key
      if(property_exists( $objeto, $key)){
        $objeto->$key = $value;
      }
    }
    // debuguear($objeto);
    return $objeto;
  }

  //====  Métodos del CRUD  ====
  /*
  $propiedad->guardar();
  $propiedad->actualizar();
  $propiedad->eliminar();
  Propiedad::find();
  Propiedad::all();
  */
  

  

}