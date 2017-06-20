<?php 
  // crear un array y recorrerlo usando while, do while y foreach

  $array = array('España', 'Francia', 'Portugal', 'Belgica', 'Alemania', 'Italia');

  $i = 0;

  do {
    echo $array[$i] . '<br/>';
    $i++;
  } while ($i < count($array));
?>