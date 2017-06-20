<?php
if (!is_dir('config')) {
  mkdir('config');
}

$pass = password_hash('pcarrier', PASSWORD_DEFAULT);

$archivo = fopen('config/opciones.txt', 'a');
fwrite($archivo, "$pass\r\n");
fclose($archivo);
?>
