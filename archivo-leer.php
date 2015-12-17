<?php
echo '****Leer todo el contenido****<br/>';
$contenido = file_get_contents('config/opciones.txt');
echo nl2br($contenido);

echo '<br/>****Leer linea por linea****<br/>';
$archivo = fopen('config/opciones.txt', 'r');
$lineas = '';
while (!feof($archivo)) {
  $lineas .= fgets($archivo);
}
fclose($archivo);
echo nl2br($lineas);
?>
