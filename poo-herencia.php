<?php
// require 'Coche.php';
require 'Vehiculo.php';

$vehiculo1 = new Vehiculo('Opel', 'Corsa', 'negro');
$coche2 = new Coche('Ford', 'Focus', 'azul');

$vehiculo1->acelerar();

$coche2->setColor('gris');

echo 'Velocidad vehiculo1: '.$vehiculo1->getVelocidad().'<br/>';

echo 'Color coche2: '.$coche2->getColor().'<br/>';

$coche3 = new Coche('Ford', 'Focus', 'naranja');

$coche3->acelerar();

echo 'Velocidad coche3: '.$coche3->getVelocidad().'<br/>';
echo 'Claxon coche3: '.$coche3->claxon().'<br/>';

$bici = new Bicicleta('BMX', '120', 'Roja');

$bici->acelerar();

echo 'Velocidad bici: '.$bici->getVelocidad().'<br/>';

?>
