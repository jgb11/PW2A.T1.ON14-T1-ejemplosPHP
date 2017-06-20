<?php
// archivo para crear archivo + archivo para leer archivo
// datos.ini
// guardar este formato
// email
// contraseña cifrada
if (!is_dir('config')) {
  mkdir('config');
}

$email = "admin@email.com";
$pass = password_hash('pcarrier', PASSWORD_DEFAULT);

$archivo = fopen('config/data.ini', 'w+');
fwrite($archivo, "$email\r\n$pass\r\n");
fclose($archivo);
?>
