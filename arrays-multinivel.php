<?php 
  $productos = array(
    'prod1' => array(
      'nombre' => 'Prod1', 
      'marca' => 'Marca1', 
      'precio' => 25.75, 
      'stock' => 100, 
      'array' => array(3, 4, 5)
      ),
    'prod2' => array(
      'nombre' => 'Prod2', 
      'marca' => 'Marca2', 
      'precio' => 30.75, 
      'stock' => 150
      ),
    'prod3' => array(
      'nombre' => 'Prod3', 
      'marca' => 'Marca3', 
      'precio' => 56.80, 
      'stock' => 200
      ),
    'prod4' => array(
      'nombre' => 'Prod4', 
      'marca' => 'Marca4', 
      'precio' => 25.75, 
      'stock' => 170
      ),
    'prod5' => array(
      'nombre' => 'Prod5', 
      'marca' => 'Marca5', 
      'precio' => 11.75, 
      'stock' => 80)
    );

  echo $productos['prod1']['precio'];
?>