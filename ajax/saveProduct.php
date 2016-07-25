<?php
$marca = $_POST['marca'];
$nombre = $_POST['nombre'];
$precio = $_POST['precio'];
$stock = $_POST['stock'];

$connection = new mysqli('localhost', 'root', '', 'ejemplos');

$connection->query("INSERT INTO products VALUES ('', '$nombre', '$marca', '$precio', '$stock')");

$connection->close();
?>
