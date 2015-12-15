<?php
$pass = 'Hola mundo!!';
$pass_cifrada = password_hash($pass, PASSWORD_DEFAULT);

// $pass_cifrada_md5 = md5('Hola mundo!!'); // método antiguo de cifrado que ya no se utiliza

echo $pass_cifrada . '<br/>';
// echo $pass_cifrada_md5 . '<br/>';

if (password_verify($pass, $pass_cifrada)) {
  echo "Login correcto!";
} else {
  echo "Error en el login!";
}
?>
