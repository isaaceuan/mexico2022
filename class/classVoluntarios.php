<?php
class Voluntarios extends Conexion
{
  public function __construct(){
    parent::__construct();
  }

  // public function horariosMatutinos($dia){
  //   $sql= "SELECT * FROM turnos_voluntarios WHERE fecha = '$dia'
  //           AND hora_inicio>= '06:00:00' AND hora_fin <= '17:30:00' AND capacidad > 0
  //           ORDER BY hora_inicio";
  //   $consulta = $this->conexion_db->query($sql);
  //   $arrayHorarios = $consulta->fetch_all(MYSQLI_ASSOC);
  //   return $arrayHorarios;
  // }

  // public function horariosVespertinos($dia){
  //   $sql= "SELECT * FROM turnos_voluntarios WHERE fecha = '$dia'
  //           AND hora_inicio>= '12:00:00' AND hora_fin <= '22:00:00' AND capacidad > 0
  //           ORDER BY hora_inicio";
  //   $consulta = $this->conexion_db->query($sql);
  //   $arrayHorarios = $consulta->fetch_all(MYSQLI_ASSOC);
  //   return $arrayHorarios;
  // }
  public function turnoAsignado($turno){
    $sql = "INSERT INTO turnos_asignados VALUES (null, $turno)";
    $consulta = $this->conexion_db->query($sql);
    if ($consulta) {
      $restarCupo = $this->restarCupo($turno);
      
      return true;
    }
    else{
      return false;
    }
  }

  public function registroVoluntario($nombre, $apP, $apM, $email, $cel, $uni, $nivel, $semblanza, $razones, $turno, $evento){
    $sql = "INSERT INTO voluntarios VALUES (null, '$nombre', '$apP', '$apM', '$email',
                                    '$cel', '$genero', '$uni', '$nivel', '$semblanza', '$razones', '$evento')";
    $consulta = $this->conexion_db->query($sql);
    if($consulta){
      $turnoAsignado = $this->turnoAsignado($turno);
      $email = $this->correoAceptacionVoluntario($email, $nombre, $turno);
    }
    else{
      return false;
    }
    return $consulta;
  }

  public function restarCupo($turno){
    $sql = "UPDATE turnos_voluntarios SET
            capacidad = (capacidad - 1)
            WHERE  id_turno = '$turno' ";
    $consulta = $this->conexion_db->query($sql);
  }

  

  public function turnos($evento){
    $sql= "SELECT * FROM turnos_voluntarios WHERE evento = '$evento' ";
    $consulta = $this->conexion_db->query($sql);
    $arrayHorarios = $consulta->fetch_all(MYSQLI_ASSOC);
    return $arrayHorarios;
  }

  public function informacionTurno($turno){
    $sql = "SELECT turno, fecha, hora_inicio, hora_fin FROM turnos_voluntarios WHERE id_turno = $turno ";
    $consulta = $this->conexion_db->query($sql);
    $array_datos = $consulta->fetch_all(MYSQLI_ASSOC);
    foreach ($array_datos as $valor) {
      $respuesta = "
                    <style type='text/css'>
                      table{
                        border: 1px solid gray;
                      }
                      th, td{
                        width: 110px;
                        text-align: center;
                      }
                    </style>
                    <table class='tabla_email'>
                      <caption><h4>Horario Seleccionado</h4></caption>
                      <thead>
                        <tr>
                          <th>Turno</th>
                          <th>Fecha</th>
                          <th>Hora Inicio</th>
                          <th>Hora Fin</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>".$valor["turno"]."</td>
                          <td>".$valor["fecha"]."</td>
                          <td>".$valor["hora_inicio"]."</td>
                          <td>".$valor["hora_fin"]."</td>
                        </tr>
                      </tbody>
                    </table>";
    }
    return $respuesta;
  }

  public function correoAceptacionVoluntario($correo, $nombre, $turno){
    $datosTurno = $this->informacionTurno($turno);
    $mail = new PHPMailer\PHPMailer\PHPMailer();
    $mail->CharSet = 'UTF-8';
          //Luego tenemos que iniciar la validaci??n por SMTP:
            $mail->IsSMTP();
            $mail->Host = "smtp.hostinger.com"; // A RELLENAR. Aqu?? pondremos el SMTP a utilizar. Por ej. mail.midominio.com
            $mail->SMTPDebug = 0 ;
            $mail->SMTPAuth = true;
            $mail->Username = "contenido@congresoparques.com"; // A RELLENAR. Email de la cuenta de correo. ej.info@midominio.com La cuenta de correo debe ser creada previamente.
            $mail->Password = "contenido1*"; // A RELLENAR. Aqui pondremos la contrase??a de la cuenta de correo
            $mail->Port = 587; // Puerto de conexi??n al servidor de envio.
            $mail->SMTPSecure =  "tls"  ; // Habilitar el cifrado TLS
            $mail->setFrom("contenido@congresoparques.com"); // A RELLENARDesde donde enviamos (Para mostrar). Puede ser el mismo que el email creado previamente.
            $mail->FromName = "Congreso Parques"; //A RELLENAR Nombre a mostrar del remitente.
            $mail->addAddress($correo); // Esta es la direcci??n a donde enviamos
            $mail->IsHTML(true); // El correo se env??a como HTML
            $mail->Subject = "Participaci??n Registrada."; // Este es el titulo del email.
            $body = "<html><body>
                          <p>".$nombre.",<br> Gracias por registrarte como voluntario en el 3er. Congreso Internacional de Parques urbanos 2020. 
                          ??Esta es una gran responsabilidad por lo que ser?? un placer contar con tu participaci??n!</p>
                          <p>Los horarios seleccionados son los siguientes:</p>
                          ".$datosTurno."
                          <p>Cada horario es diferente y cada uno tiene una tarea espec??fica, adem??s de diferente. Es por eso que una semana 
                          antes del congreso tendremos una capacitaci??n para voluntarios, esta ser?? en l??nea. 
                          <p>??Saludos!</p>
                          <p>Vitoria Mart??n.<br> Direcci??n de Contenido y Educaci??n. </p>
                      </body></html>";
            // $body .= "Aqu?? continuamos el mensaje";
            $mail->Body = $body;
            // Mensaje a enviar.
            // $exito = $mail->Send(); // Env??a el correo.
            // // $mail->SmtpClose();

            $exito = $mail->Send(); // Env??a el correo.
  }

}

?>
