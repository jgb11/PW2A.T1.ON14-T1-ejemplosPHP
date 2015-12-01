<?php 
$email = "";
$password = "";

/* 
Sanitización de datos:
  - addslashes() > escapa caracteres especiales para que formen parte de la cadena, se evita la injeccion de cógigo sql
  - strip_tags() > elimina etiquetas como html o script, se evita la injeccion de cógigo javascript
*/

if ($_POST) {
  $email = addslashes(strip_tags($_POST['email']));
  $password = addslashes(strip_tags($_POST['password']));
}

if ($_GET) {
  $email = addslashes(strip_tags($_GET['email']));
  $password = addslashes(strip_tags($_GET['password']));
}

echo "$email & $password";
?>