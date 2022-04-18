<?php

class Registro extends Conexion{

  public function __construct(){

      parent::__construct();

  }

  public function desplegarTemas(){

    $sql = $this->conexion_db->query("SELECT * FROM temas WHERE id_tema > 1 ");

    $temas = $sql->fetch_all(MYSQLI_ASSOC);

    return $temas;
  }

  public function asignarId(){

    $resultado = $this->conexion_db->query('SELECT max(id_conferencia) AS max_idconfe FROM conferencias');

    $respuesta = $resultado->fetch_all(MYSQLI_ASSOC);

    foreach ($respuesta as $valor) {
    $id = $valor['max_idconfe'];
    }

    return $id;

  }

  public function registroAspirante($array, $nom, $ap, $em, $em2, $tel, $cargo, $emp, $pais, $ciudad, $bio, $nomf, $tipof, $tempf, $evento){

    $id_sesion = $this->asignarID();
    for ($i=0; $i < $array ; $i++) {
      // echo $array, $nom[$i], $ap[$i], $em[$i], $em2[$i], $tel[$i], $cargo[$i], $emp[$i], $pais[$i], $ciudad[$i], $exp[$i], $nomf[$i], $id_sesion;
      $sql = $this->conexion_db->query("INSERT INTO aspirantes
        VALUES (null, '$nom[$i]', '$ap[$i]', '$em[$i]', '$em2[$i]', '$tel[$i]', '$cargo[$i]',
        '$emp[$i]', '$pais[$i]', '$ciudad[$i]', '$bio[$i]', '$nomf[$i]', '$id_sesion', '$evento') ");

        $destino_foto = $_SERVER['DOCUMENT_ROOT'].'/img/uploads/expositores/';

        if ($sql){
          move_uploaded_file($tempf[$i], $destino_foto.$nomf[$i]);
        }
    }
     return $sql;
  }

  public function registroPropuesta($sesion, $tema, $desc, $just, $obj1, $obj2, $obj3, $mod, $enlace1, $enlace2, $enlace3, $evento){

      $sql = $this->conexion_db->query("INSERT INTO conferencias VALUES (null, '$sesion','$tema', null, '$desc', '$just', '$obj1', '$obj2', '$obj3', '$mod', '$enlace1', '$enlace2', '$enlace3', null, null, null, null, null, null, '$evento')");

      return $sql;
  }

  public function correoRegistroPropuesta($correo, $sesion){

    $mail = new PHPMailer\PHPMailer\PHPMailer();
    $mail->CharSet = 'UTF-8';
    //Luego tenemos que iniciar la validación por SMTP:
    $mail->SMTPDebug = 0 ;
    $mail->IsSMTP();
    $mail->SMTPAuth = true;
    $mail->Host = "smtp.hostinger.com"; // A RELLENAR. Aquí pondremos el SMTP a utilizar. Por ej. mail.midominio.com
    $mail->Username = "contenido@congresoparques.com"; // A RELLENAR. Email de la cuenta de correo. ej.info@midominio.com La cuenta de correo debe ser creada previamente.
    $mail->Password = "contenido1*"; // A RELLENAR. Aqui pondremos la contraseña de la cuenta de correo
    $mail->Port = 587; // Puerto de conexión al servidor de envio.
    $mail->SMTPSecure =  "tls"  ; // Habilitar el cifrado TLS
    //cambiar por contenido@congreso@congresoparques.com
    $mail->setFrom("contenido@congresoparques.com"); // A RELLENARDesde donde enviamos (Para mostrar). Puede ser el mismo que el email creado previamente.
    $mail->FromName = "World Urban Parks Congress 2022"; //A RELLENAR Nombre a mostrar del remitente.
    $mail->addAddress($correo[0]); // Esta es la dirección a donde enviamos

    $mail->IsHTML(true); // El correo se envía como HTML
    $mail->Subject = "Propuesta Registrada"; // Este es el titulo del email.
    $body = "<html><body>
                  <p>Gracias por enviar tu propuesta de sesión educativa para
                  el 3er Congreso de Parques Urbanos 2020. Hemos recibido tu información
                  correctamente y se integrará a las sesiones que serán revisadas
                  por nuestro Consejo de Contenido y Educación.</p>
                  <p>Daremos los resultados de la convocatoria en las fechas
                  establecidas y nos comunicaremos previamente en caso de ser
                  necesario.</p>
                  <p>¡Saludos!</p>
                  <p>Cristina R. de León.<br>Dirección de Contenido y Educación. </p>
              </body></html>";
    // $body .= "Aquí continuamos el mensaje";
    $mail->Body = $body;
    // Mensaje a enviar.
    $exito = $mail->Send(); // Envía el correo.
      // if($exito){ echo 'El correo fue enviado correctamente.'; }else{ echo 'Hubo un problema. Contacta a un administrador.'; }
    }

}

?>
