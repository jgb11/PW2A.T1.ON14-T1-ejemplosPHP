<?php
session_start();

if (!isset($_SESSION['email'])) {
  $_SESSION['msg'] = "Inicia sesión para acceder a tu perfil de usuario.";
  header('Location: login-form.php');
  exit();
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Perfil de usuario</title>
</head>
<body>
  <h1>Perfil <?php echo $_SESSION['email']; ?></h1>
  <div>
    <?php
    if (isset($_SESSION['msg'])) {
      echo $_SESSION['msg'];
      unset($_SESSION['msg']);
    }
    ?>
  </div>
  <a href="login-logout.php">Cerrar sesion</a>
</body>
</html>
