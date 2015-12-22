<?php
session_start();
// session_destroy();
unset($_SESSION['email']); // elimina la variable de sesion email
$_SESSION['msg'] = "Sesión cerrada correctamente.";
header('Location: login-form.php');
exit();
?>
