<?php 
// no hay funcion específica para borrar cookies, 
// lo que se hace es poner como fecha de expiración anterior al momento actual
// las cookies están pensadas para que se eliminen mediante su fecha de expiración

// setcookie('micookie', null, time() - 1);
// setcookie('contadorVisitas', null, time() - 1);

foreach ($_COOKIE as $key => $value) {
  setcookie($key, $value, time() - 1);
}

?>