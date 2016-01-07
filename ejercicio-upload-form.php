<?php
// crear formulario con 3 campos, nombre, apellidos, foto perfil
// recoger los datos nombre y apellidos y procesar el archivo subido
// mostrar, nombre, apellidos y foto de perfil


?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Formulario de subida</title>
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
    <form class="upload" action="ejercicio-upload.php" method="post" enctype="multipart/form-data">
      <div>
        <label for="nombre">Nombre: </label>
        <input type="text" id="nombre" name="nombre">
      </div>
      <div>
        <label for="apellidos">Apellidos: </label>
        <input type="text" id="apellidos" name="apellidos">
      </div>
      <div>
        <label for="apellidos">Foto de perfil: </label>
        <input type="hidden" name="MAX_FILE_SIZE" value="8388608">
        <input type="file" name="avatar" value="">
      </div>
      <input type="submit" value="Subir archivo">
    </form>
  </body>
</html>
