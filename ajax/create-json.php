<?php
$coins = array(
  'Spain' => array(
    'moneda' => 'Euro',
    'capital' => 'Madrid',
  ),
  'France' => array(
    'moneda' => 'Euro',
    'capital' => 'Paris',
  ),
  'EEUU' => array(
    'moneda' => 'Washington',
    'capital' => 'Dolar',
  ),
  'Japan' => array(
    'moneda' => 'Tokyo',
    'capital' => 'Yen',
  ),
  'UK' => array(
    'moneda' => 'Londres',
    'capital' => 'Libra',
  )
);

// echo json_encode($coins);
// echo '<br/>';
// echo '<br/>';

$coinsArray = array('Euro', 'Dolar', 'Yen', 'Libra');

// echo json_encode($coinsArray);
// echo '<br/>';
// echo '<br/>';

$connection = new mysqli('localhost', 'root', '', 'ejemplos');

$result = $connection->query("SELECT * FROM products");

$products = array();

while ($row = $result->fetch_assoc()) {
  array_push($products, $row);
}

echo json_encode($products);
// echo '<br/>';
// echo '<br/>';
?>
