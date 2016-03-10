<?php
session_start();

if (isset($_SESSION['email'])) {
  $_SESSION['msg'] = "Ya ha iniciado sesión de usuario, bienvenido a su perfil.";
  header('Location: login-profile.php');
  exit();
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Formulario login</title>
  <style>
  form {
    width: 400px;
    margin-bottom: 60px;
    font: normal bold 12px Verdana, Arial;
  }

  form label {
    width: 150px;
    display: inline-block;
  }

  form input {
    width: 200px;
    margin-bottom: 10px;
    display: inline-block;
  }
  </style>
</head>
<body>
  <div>
    <?php
    if (isset($_SESSION['msg'])) {
      echo $_SESSION['msg'];
      unset($_SESSION['msg']);
    }
    ?>
  </div>
  <form name="login" action="login.php" method="post">
    <div>
      <label for="email">Email: </label>
      <input type="email" id="email" name="email" placeholder="Email">
    </div>
    <div>
      <label for="password">Contraseña: </label>
      <input type="password" id="password" name="password" placeholder="Contraseña">
    </div>
    <input type="submit" value="Iniciar sesión">
  </form>
</body>
</html>
