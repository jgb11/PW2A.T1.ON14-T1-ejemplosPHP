<?php
require 'MiExcepcion.php';

try {
  $user = 'jgb';
  $pass = '12345';
  if ($user != 'jgb' || $pass != '1245') {
    throw new MiExcepcion("Datos de acceso incorrectos | Ususario: ".$user." | Password: ".$pass, 1);
  } else {
    throw new Exception("Error Processing Request", 1);
  }
} catch (MiExcepcion $e) {
  $e->escribirLog($e->getMessage());
  echo $e->getMessage();
  exit();
} catch (Exception $e) {
  echo $e->getMessage();
  exit();
}
echo 'Hola Mundo';
?>
