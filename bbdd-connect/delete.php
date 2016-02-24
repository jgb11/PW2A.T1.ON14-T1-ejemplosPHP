<?php
require 'functions-bd.php';
if (isset($_GET['ref'])) { # && is_numeric($_GET['ref'])) {
  # $ref = addslashes(strip_tags($_GET['ref']));
  $ref = filter_input(INPUT_GET, 'ref', FILTER_SANITIZE_NUMBER_INT);

  $connection = connection();
  $query = "DELETE FROM productos WHERE referencia='$ref'";
  $result = $connection->query($query);

  if (!$result) {
    $_SESSION['error'] = true;
    $_SESSION['msg'] = 'ERROR al eliminar el Producto en la Base de Datos.';
  } else {
    $_SESSION['msg'] = 'Producto eliminado correctamente.';
  }

  $connection->close();
} else {
  $_SESSION['error'] = true;
  $_SESSION['msg'] = 'Producto no válido.';
}

header('Location: catalogo.php');

exit();
?>
