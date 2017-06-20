<?php
namespace MiProyecto\Util;
class Utilidades{
  public static function sanear($contenido){
    return trim(addslashes(strip_tags($contenido)));
  }

  public static function generarPass($longitud = 8){
    $pass = '';
    $caracteres = array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i',
                        'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r',
                        's', 't', 'u', 'v', 'w', 'x', 'y', 'z',
                        '1', '2', '3', '4', '5', '6', '7', '8', '9', '0',
                        '#', '@', '.');
    while (strlen($pass) < $longitud) {
      $posicion = rand(0, count($caracteres) - 1);
      $mayMin = rand(0, 1); # 0 = minúsculas; 1 = mayúsculas

      $pass .= ($mayMin) ? strtoupper($caracteres[$posicion]) : $caracteres[$posicion];
    }

    return $pass;
  }

  public static function cifrarPassword($password) {
    return password_hash($password, PASSWORD_DEFAULT);
  }

  public static function validarPassword($password, $passwordCifrado) {
    return password_verify($password, $passwordCifrado);
  }

  public static function leerFichero($nombreFichero, $rutaFichero){
    $contenido = file_get_contents($rutaFichero.$nombreFichero);
    return nl2br($contenido);
  }

  public static function crearFichero($nombreFichero, $rutaFichero, $contenido){
    if (!is_dir($rutaFichero)) {
      mkdir($rutaFichero);
    }
    $archivo = fopen($rutaFichero.$nombreFichero, 'w+');
    fwrite($archivo, $contenido);
    fclose($archivo);
  }

}
?>
