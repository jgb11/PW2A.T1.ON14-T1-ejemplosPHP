<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Recoger datos formulario</title>
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
  <form name="login" action="procesar-form.php" method="post">
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

  <a href="procesar-form.php?email=mail@mail.com&password=abcdef">Link al login</a>
</body>
</html>