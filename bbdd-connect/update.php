<?php
require 'functions-bd.php';
if (isset($_POST['referencia'])) { # && is_numeric($_POST['ref'])) {
  # $referencia = addslashes(strip_tags($_POST['referencia']));
  # $nombre = addslashes(strip_tags($_POST['nombre']));
  # $marca = addslashes(strip_tags($_POST['marca']));
  # $precio = addslashes(strip_tags($_POST['precio']));
  # $stock = addslashes(strip_tags($_POST['stock']));

  $referencia = filter_input(INPUT_POST, 'referencia', FILTER_SANITIZE_NUMBER_INT);
  $nombre = filter_input(INPUT_POST, 'nombre', FILTER_SANITIZE_STRING);
  $marca = filter_input(INPUT_POST, 'marca', FILTER_SANITIZE_STRING);
  $precio = filter_input(INPUT_POST, 'precio', FILTER_SANITIZE_NUMBER_FLOAT);
  $stock = filter_input(INPUT_POST, 'stock', FILTER_SANITIZE_NUMBER_INT);

  $connection = connection();
  $query = "UPDATE productos SET nombre='$nombre',marca='$marca',precio='$precio',stock='$stock'
            WHERE referencia='$referencia'";
  $result = $connection->query($query);

  if (!$result) {
    $_SESSION['error'] = true;
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
