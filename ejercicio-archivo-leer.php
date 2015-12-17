<?php
$archivo = fopen('config/data.ini', 'r');
$lineas = '';
while (!feof($archivo)) {
  $lineas .= fgets($archivo);
}
fclose($archivo);
echo nl2br($lineas);
?>
