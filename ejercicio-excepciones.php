<?php
// crear un tipo de excepción personalizado que permita llevar un registro y adaptarlo en el ejercicio de login
class LoginException extends Exception {
  public function escribirLog($msg){
    $archivo = fopen('registro.log', 'a');
    $contenido = date('d/m/Y H:i:s')."\t|\t".$msg."\t|\t".$_SERVER['REMOTE_ADDR']."\r\n";

    fwrite($archivo, $contenido);
    fclose($archivo);
  }
}
?>
