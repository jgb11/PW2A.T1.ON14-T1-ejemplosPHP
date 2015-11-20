<?php 
// crear un array de paises, mínimo 5
// utilizar switch para comprobar el nombre el país que está en la posición 4 del array
// evaluar el nombre del país y mostrar su capital

$paises = array(
  'España', 
  'Alemania',
  'Francia',
  'Italia',   
  'Portugal'
  );

switch ($paises[3]) {
  case 'España':
    echo 'Madrid';
    break;
  case 'Francia':
    echo 'Paris';
    break;
  case 'Alemania':
    echo 'Berlin';
    break;
  case 'Italia':
    echo 'Roma';
    break;
  case 'Portugal':
    echo 'Porto';
    break;
  default:
    echo 'No se conoce la cpital.';
    break;
}
?>