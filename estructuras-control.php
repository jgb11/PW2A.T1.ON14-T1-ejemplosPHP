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
      echo '<br/>Martes';
      break;
    case 3:
      echo '<br/>Miércoles';
      break;
    case 4:
      echo '<br/>Jueves';
      break;
    case 5:
      echo '<br/>Viernes';
      break;
    case 6:
      echo '<br/>Sábado';
      break;
    case 7:
      echo '<br/>Domingo';
      break;
    default:
      echo '<br/>Día no válido';
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
?>