<?php
session_start();
if (isset($_POST['referencia']) && is_numeric($_POST['referencia'])) {
  $referencia = addslashes(strip_tags($_POST['referencia']));
  $nombre = addslashes(strip_tags($_POST['nombre']));
  $marca = addslashes(strip_tags($_POST['marca']));
  $precio = addslashes(strip_tags($_POST['precio']));
  $stock = addslashes(strip_tags($_POST['stock']));

  $connection = new mysqli('localhost', 'root', '', 'ejemplos');
  $query = "UPDATE productos SET nombre='$nombre',marca='$marca',precio='$precio',stock='$stock'
            WHERE referencia='$referencia'";
  $result = $connection->query($query);

  if (!$result) {
    $_SESSION['msg'] = 'ERROR al actualizar el Producto en la Base de Datos.';
  } else {
    $_SESSION['msg'] = 'Producto actualizado correctamente.';
  }
  # no necesario ya que se va a redireccionar siempre al finalizar la ejecución y se cerrará la conexión sola
  # $connection->close();

} else {
  $_SESSION['msg'] = 'Producto no encontrado.';
}

header('Location: catalogo.php');
exit();
?>
