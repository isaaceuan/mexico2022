<?php

namespace App;

class Poster extends ActiveRecord{

  //mapear los datos
  protected static $columnasDB = ['id_poster', 'nombre', 'apellidos', 'email', 'email_asistente', 'telefono', 'cargo', 'empresa', 'pais', 'ciudad', 'grupo', 'nombre_proyecto', 'tema', 'categoria', 'link1', 'link2', 'link3', 'documento', 'poster', 'aprobado', 'congreso'];

  public $id_poster;
  public $nombre;
  public $apellidos;
  public $email;
  public $email_asistente;
  public $telefono;
  public $cargo;
  public $empresa;
  public $pais;
  public $ciudad;
  public $grupo;
  public $nombre_proyecto;
  public $tema;
  public $categoria;
  public $link1;
  public $link2;
  public $link3;
  public $documento;
  public $poster;
  public $aprobado;
  public $congreso;

  public function __construct($args = [])
  {
    $this->id_poster = $args['id_poster'] ?? '';
    $this->nombre = $args['nombre'] ?? '';
    $this->apellidos = $args['apellidos'] ?? '';
    $this->email = $args['email'] ?? '';
    $this->email_asistente = $args['email_asistente'] ?? '';
    $this->telefono = $args['telefono'] ?? '';
    $this->cargo = $args['cargo'] ?? '';
    $this->empresa = $args['empresa'] ?? '';
    $this->pais = $args['pais'] ?? '';
    $this->ciudad = $args['ciudad'] ?? '';
    $this->grupo = $args['grupo'] ?? '';
    $this->nombre_proyecto = $args['nombre_proyecto'] ?? '';
    $this->tema = $args['tema'] ?? '';
    $this->categoria = $args['categoria'] ?? '';
    $this->link1 = $args['link1'] ?? '';
    $this->link2 = $args['link2'] ?? '';
    $this->link3 = $args['link3'] ?? '';
    $this->documento = $args['documento'] ?? '';
    $this->poster = $args['poster'] ?? '';
    $this->aprobado = $args['aprobado'] ?? '';
    $this->congreso = $args['congreso'] ?? '';
  }

  public function guardar(){
    //sanitizar datos
    $datos = $this->sanitizarDatos();
    //crear un string a partir de un arreglo
    //acceder a los indices del arreglo
    //  join(', ', array_keys($datos));
    //acceder a los valores del arreglo
    // var_dump(join(', ', array_values($datos)));
    // die();

    $query = "INSERT INTO posters ( ";
    $query .=join(', ', array_keys($datos));
    $query .= " ) VALUES (' ";
    $query .= join("', '", array_values($datos));
    $query .= " ')";

    $resultado = self::$conexion_db->query($query);

    return $resultado;
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
      if ($columna === 'id_poster') continue; //ignora la columna de id_tema
        $datos[$columna] = $this->$columna; //referencia al objeto en memoria
      }
    // var_dump($datos);
    // die();
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
  
  //Método setea el nombre de la imagen y la válida devolviendo el nuevo nombre
  public function guardarDocumentos($doc, $poster)
  {
    $random=bin2hex(random_bytes(2));  //generar cadena random de 4 caracteres 
    $docFormat = $random."-".mb_strtolower(str_replace(' ', '-', $doc["name"]));
    $posterFormat = $random."-".mb_strtolower(str_replace(' ', '-', $poster["name"]));
    // $dir = $_SERVER['DOCUMENT_ROOT'].'/mexico2022/img/uploads/';
    $dir = $_SERVER['DOCUMENT_ROOT'].'/img/uploads/';

    $doc1 = move_uploaded_file($doc["tmp_name"], $dir.$docFormat);
    $doc2 = move_uploaded_file($poster["tmp_name"], $dir.$posterFormat);

    if($doc1 && $doc2){
      
      $sql = "UPDATE posters
        SET documento = '$docFormat',
        poster = '$posterFormat'
        WHERE id_poster = (SELECT max(id_poster) FROM posters)
        ";
      
      $ejecutar = self::$conexion_db->query($sql);

      return $ejecutar;

    }
    else{
      return false;
    }
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