<?php 
  /*
    if(condicion) {
      instruccions
      ...
    } else if(condicion) {
      instrucciones
      ...
    } else {
      instrucciones
      ...
    }
  */
  echo '****Estructura if****<br/>';
  echo 'EDAD: ';
  $edad = 12;

  if($edad >= 18) {
    echo "Eres mayor de edad";
  } else {
    echo "No eres mayor de edad";
  }

  echo '<br/>SEMAFORO: ';
  $color = 'ambar';

  if($color == 'rojo') {
    echo 'No puedes pasar';
  } else if($color == 'verde') {
    echo 'Puedes pasar';
  } else if($color == 'ambar') {
    echo 'Ten cuidado al pasar';
  } else {
    echo 'No es un semaforo :P';
  }

  $nota = 7;
  echo '<br/>OPERADOR TERCIARIO: ';
  echo ($nota > 5) ? 'Aprobado' : 'Suspenso';

  /*
    switch (variable) {
    case 'value1':
      # code...
      break;
    case 'value2':
      # code...
      break;
    ...
    case 'valueN':
      # code...
      break;
    default:
      # code...
      break;
  }
  */
  echo '<br/><br/>****Estructura switch****<br/>';
  $dia = 2;

  switch ($dia) {
    case 1:
    case 8:
      echo 'Lunes';
      break;
    case 2:
      echo 'Martes';
      break;
    case 3:
      echo 'Miércoles';
      break;
    case 4:
      echo 'Jueves';
      break;
    case 5:
      echo 'Viernes';
      break;
    case 6:
      echo 'Sábado';
      break;
    case 7:
      echo 'Domingo';
      break;
    default:
      echo 'Día no válido';
      break;
  }

  /*
  for ($i=0; $i < ; $i++) { 
    # code...
  }
  */
  echo '<br/><br/>****Estructura for****<br/>';

  for ($i = 0; $i < 5; $i++) { 
    echo "Hola mundo $i<br/>";
  }

  /*
  while (condicion) {
    # code...
  }
  */
  echo '<br/><br/>****Estructura while****<br/>';

  $i=0;
  while ($i <= 5) {
    echo "Hola mundo $i<br/>";
    $i++;
  }

  /*
  do {
    # code...
  } while (condicion);
  */
  echo '<br/><br/>****Estructura dowhile****<br/>';

  $x = 10;
  do {
    echo "Hola mundo $x<br/>";
    $x++;
  } while ($x <= 5);

  /*
  foreach ($arr as $key => $value) {
    # code...
  };
  */
  echo '<br/><br/>****Estructura foreach****<br/>';

  echo '**Array normal**<br/>';
  $arr = array(1009, 2990, 134, 2445, 414);
  foreach ($arr as $key) {
    echo "$key<br/>";
  };

  echo '**Array asociativo**<br/>';
  $arrAs = array("a" => 10, "b" => 12, "c" => 13, "d" => 24, "e" => 45);
  foreach ($arrAs as $key => $value) {
    echo "$key: $value<br/>";
  };
?>