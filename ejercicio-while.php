<?php 
  // crear un array y recorrerlo usando while, do while y foreach

  $array = array('España', 'Francia', 'Portugal', 'Belgica', 'Alemania', 'Italia');

  $i = 0;

  while ($i < count($array)) {
    echo $array[$i] . '<br/>';
    $i++;
  }
?>