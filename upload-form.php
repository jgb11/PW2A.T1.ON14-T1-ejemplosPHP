<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Formulario de subida</title>
  </head>
  <body>
    <form class="upload" action="upload.php" method="post" enctype="multipart/form-data">
      <input type="hidden" name="MAX_FILE_SIZE" value="8388608">
      <input type="file" name="avatar" value=""><br/>
      <input type="submit" value="Subir archivo">
    </form>
  </body>
</html>
