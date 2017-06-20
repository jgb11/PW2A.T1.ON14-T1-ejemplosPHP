<?php
  $paises = array('Spain', 'France', 'Germany', 'Italy');
  print_r($paises);

  echo "<br/>";
  array_unshift($paises, 'Russia');
  print_r($paises);

  echo "<br/>";
  array_push($paises, 'Portugal');
  print_r($paises);

  echo "<br/>";
  array_shift($paises);
  print_r($paises);

  echo "<br/>";
  array_pop($paises);
  print_r($paises);

  $array1 = array(1, 2, 3);
  $array2 = array(4, 5, 6);

  $arrayFinal = array_merge($array1, $array2);
  echo "<br/>";
  print_r($arrayFinal);

  $capitales = array('España' => 'Madrid', 'Paris' => 'Francia');
  $arrayTmp = array('Alemania' => 'Berlin');
  $capitales = array_merge($capitales, $arrayTmp);
  echo "<br/>";
  print_r($capitales);
  echo "<br/>";
  echo count($capitales);
?>
