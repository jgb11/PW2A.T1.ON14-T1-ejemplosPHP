<?php
$pass_cifrada = password_hash('contraseña', PASSWORD_DEFAULT);

echo $pass_cifrada . '<br/>';

if (password_verify('contraseña', $pass_cifrada)) {
  echo 'Contraseña correcta!';
} else {
  echo 'Contraseña incorrecta...';
}
?>
