<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Datos usuario intoducidos</title>
</head>
<body>
  <?php 
  if ($_POST) {
    $nombre = addslashes(strip_tags($_POST['name']));
    $apellidos = addslashes(strip_tags($_POST['lastname']));
    $email = addslashes(strip_tags($_POST['email']));
    $telefono = addslashes(strip_tags($_POST['phone']));
  ?>
    <h1>Datos usuario</h1>
    <div>Nombre completo: <?php echo "$nombre $apellidos"?></div>
    <div>Email: <?php echo "$email"?></div>
    <div>Telefono: <?php echo "$telefono"?></div>
  <?php 
  } else {
    $error = 'No se ha enviado un formulario post.';
  ?>
    <h1>ERROR: <?php echo "$error"; ?></h1>
  <?php 
  }
  ?>
</body>
</html>