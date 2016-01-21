<?php
require 'ejercicio-poo-static.php';
$password = PhpMethods::cifrarPassword('password');

echo $password.'<br/>';
if (PhpMethods::descifrarPassword('password', $password)) {
  echo 'Password OK!<br/>';
} else {
  echo 'Password KO...<br/>';
}

echo PhpMethods::calcularAreaCirculo(23);
?>
