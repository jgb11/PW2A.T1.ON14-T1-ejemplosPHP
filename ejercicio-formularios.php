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
  <form name="login" action="ejercicio-formularios-procesar.php" method="post">
    <div>
      <label for="name">Nombre: </label>
      <input type="text" id="name" name="name" placeholder="Nombre">
    </div>
    <div>
      <label for="lastname">Apellidos: </label>
      <input type="text" id="lastname" name="lastname" placeholder="Apellidos">
    </div>
    <div>
      <label for="email">Email: </label>
      <input type="email" id="email" name="email" placeholder="Email">
    </div>
    <div>
      <label for="phone">Teléfono: </label>
      <input type="tel" id="phone" name="phone" placeholder="Telefono" maxlength="9">
    </div>
    <input type="submit" value="Indicar datos">
  </form>
</body>
</html>