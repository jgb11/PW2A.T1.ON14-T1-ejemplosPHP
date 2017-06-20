<?php
// crear una cookie que vaya aumentando, cuando las visitas lelguen hasta 10 el valor se reinicia
if (isset($_COOKIE['contadorVisitas']) && $_COOKIE['contadorVisitas'] <= 9) {
  setcookie('contadorVisitas', $_COOKIE['contadorVisitas'] + 1, time() + 3600);
} else {
  setcookie('contadorVisitas', 1, time() + 3600);
}
  echo 'Contador de visitas incrementado!';
?>
