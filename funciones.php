<?php 
// require 'funciones2.php';

function saludar(){
  echo 'Hola desde la funcion!<br/>';
}

saludar();

function sumar($x, $y){
  return "La suma de $x e $y es: " . ($x + $y);
}

echo sumar(3, 5);

function contar($array){
  $contador = 0;
  foreach ($array as $key) {
    $contador++;
  }
  return $contador;
}

echo '<br/> Contar elementos de un array: ' . contar(array(4, 5, 6, 7, 8, 9, 0)) . '<br/>';

$paises = array('España', 'Alemania', 'Italia', 'Belgica', 'Francia');
for ($i = 0; $i < contar($paises); $i++) {
  echo "$paises[$i]<br/>";
}

function sumar2($num1, $num2 = 2){
  return $num1 + $num2;
}
echo 'Sumar sin parametro: ' . sumar2(5) . '<br/>';
echo 'Sumar con parametro: ' . sumar2(5, 7) . '<br/>';

function css($rutas){
  foreach ($rutas as $ruta) {
    echo '<link rel="stylesheet" type="text/css" href="css/' . $ruta . '.css">';
  }
}
function script($rutas){
  foreach ($rutas as $ruta) {
    echo '<script type="text/javascript" src="js/' . $ruta . '.js"></script>';
  }
}
?>
