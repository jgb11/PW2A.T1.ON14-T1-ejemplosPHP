<?php
require 'Coche.php';

$coche1 = new Coche('Opel', 'Corsa', 'negro');
$coche2 = new Coche('Ford', 'Focus', 'azul');

$coche1->acelerar();

$coche2->setColor('naranja');

echo $coche1->getVelocidad()."<br/>";

echo $coche2->getColor()."<br/>";

?>
