<?php 
setcookie('micookie', 'mivalor');

setcookie('cookieCaduca', 'valorcookie', time() + 60);

if (isset($_COOKIE['contadorVisitas'])) {
  setcookie('contadorVisitas', $_COOKIE['contadorVisitas'] + 1, time() + 3600);
} else {
  setcookie('contadorVisitas', 1, time() + 3600);
}
if (isset($_COOKIE['contadorVisitas'])) {
  echo 'Visitas: ' . $_COOKIE['contadorVisitas'];
}

?>