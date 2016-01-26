<?php
require 'poo-utilidades.php';
session_start();
// $email = addslashes(strip_tags($_POST['email']));
// $password = addslashes(strip_tags($_POST['password']));

// Utilizar la clase Utilidades
$email = Utilidades::sanear($_POST['email']);
$password = Utilidades::sanear($_POST['password']);

$archivo = fopen('config/data.ini', 'r');
$email_bd = trim(fgets($archivo)); // trim() elimina todos los caracteres sobrantes de una cadena
$password_bd = trim(fgets($archivo));
fclose($archivo);

if($email == $email_bd && password_verify($password, $password_bd)){
  $_SESSION['email'] = $email;
  $_SESSION['msg'] = "Bienvenido a su perfil de usuario.";
  header('Location: login-perfil.php');
  exit();
}

$_SESSION['msg'] = "Datos de acceso incorrectos.";
header('Location: login-form.php');
exit();
?>
