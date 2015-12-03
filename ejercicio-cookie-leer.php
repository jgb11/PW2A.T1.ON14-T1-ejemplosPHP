<?php 
if (isset($_COOKIE['contadorVisitas'])) {
  echo 'Contador de visitas: ' . $_COOKIE['contadorVisitas'] . '<br/>';
} else {
  echo 'No hay cookie Contador de visitas!<br/>';
}
?>