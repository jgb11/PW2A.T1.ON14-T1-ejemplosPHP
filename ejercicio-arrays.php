<?php 

$producto = array(
  'nombre' => 'Camiseta Running', 
  'marca' => 'Adidas',
  'precio' => 23.95,
  'stock' => 234
  );

echo 'Nombre: ' . $producto['nombre'] . 
  ', Marca: ' . $producto['marca'] . 
  ', Precio: ' . $producto['precio'] . 
  ', Stock: ' . $producto['stock'];

$cliente = array(
  'nombre' => 'Pedro', 
  'apellidos' => 'Gomez Perez',
  'telefono' => '654768756',
  'email' => 'pgomez@gmail.com',
  );

echo "<br/>";
echo 'Nombre: ' . $cliente['nombre'] . 
  ', Apellidos: ' . $cliente['apellidos'] . 
  ', Telefono: ' . $cliente['telefono'] . 
  ', Email: ' . $cliente['email'];

?>