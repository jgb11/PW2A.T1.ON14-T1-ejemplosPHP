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
?>