<?php
session_start();
$nombre = addslashes(strip_tags($_POST['nombre']));
$marca = addslashes(strip_tags($_POST['marca']));
$precio = addslashes(strip_tags($_POST['precio']));
$stock = addslashes(strip_tags($_POST['stock']));

$connection = new mysqli('localhost', 'root', '', 'ejemplos');
$query = "INSERT INTO productos VALUES ('', '$nombre', '$marca', '$precio', '$stock')";
$result = $connection->query($query);

if (!$result) {
  $_SESSION['msg'] = 'ERROR al insertar el Producto en la Base de Datos.';
} else {
  $_SESSION['msg'] = 'Producto agregado correctamente.';
}

$connection->close();

header('Location: catalogo.php');

exit();
?>
