<?php 
session_start();
// - crear un formulario introducir nombre
// - al enviar se evia a otro archivo donde cree una variable de sesion con el nombre
// - si al volver al formulario existe el nombre debajo del input 
// aparece que se ha identificado con ese nombre.
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Informar datos usuario</title>
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
  <form name="login" action="ejercicio-sesion-procesar.php" method="post">
    <div>
      <label for="name">Nombre: </label>
      <input type="text" id="name" name="name" placeholder="Nombre">
    </div>
    <input type="submit" value="Identificarse">
  </form>
  <?php 
  if($_SESSION && $_SESSION['name']){
  	echo 'Usuario logueado: ' . $_SESSION['name'];
  }
  ?>
</body>
</html>