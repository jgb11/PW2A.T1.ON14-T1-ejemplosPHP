<?php 
session_start();
$usuario_validado = false;

if ($_POST && $_POST['name']) {
  $nombre = addslashes(strip_tags($_POST['name']));
    
  $_SESSION['name'] = $nombre;
  $usuario_validado = true;
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Confirmación login</title>
</head>
<body>
	<h1>
	<?php 
	if ($usuario_validado){
		echo 'Usuario logueado correctamente.'; 
	} else {
		echo 'Ha ocurrido un error en el login.'; 
	}
	?>
	</h1>
	<a href="ejercicio-sesion.php">Volver</a>
</body>
</html>