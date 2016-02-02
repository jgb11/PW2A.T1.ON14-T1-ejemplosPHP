<?php
/**
 *
 */
class MiExcepcion extends Exception
{

  public function escribirLog($msg)
  {
    $archivo = fopen('registro.log', 'a');
    $contenido = date('d/m/Y H:i:s')."\t".$msg."\t".$_SERVER['REMOTE_ADDR']."\r\n";

    fwrite($archivo, $contenido);
    fclose($archivo);
  }
}

?>
