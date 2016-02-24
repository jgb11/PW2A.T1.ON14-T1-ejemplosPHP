<?php
require 'functions-bd.php';
# $nombre = addslashes(strip_tags($_POST['nombre']));
# $marca = addslashes(strip_tags($_POST['marca']));
# $precio = addslashes(strip_tags($_POST['precio']));
# $stock = addslashes(strip_tags($_POST['stock']));

$nombre = filter_input(INPUT_POST, 'nombre', FILTER_SANITIZE_STRING);
$marca = filter_input(INPUT_POST, 'marca', FILTER_SANITIZE_STRING);
$precio = filter_input(INPUT_POST, 'precio', FILTER_SANITIZE_NUMBER_FLOAT);
$stock = filter_input(INPUT_POST, 'stock', FILTER_SANITIZE_NUMBER_INT);

$connection = connection();
$query = "INSERT INTO productos VALUES ('', '$nombre', '$marca', '$precio', '$stock')";
$result = $connection->query($query);

if (!$result) {
  $_SESSION['error'] = true;
  $_SESSION['msg'] = 'ERROR al insertar el Producto en la Base de Datos.';
} else {
  $_SESSION['msg'] = 'Producto agregado correctamente.';
}

$connection->close();

header('Location: catalogo.php');

exit();
?>
