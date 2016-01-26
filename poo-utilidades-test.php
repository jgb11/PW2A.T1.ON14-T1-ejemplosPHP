<?php
require 'poo-utilidades.php';

echo Utilidades::generarPass(30).'<br/>';

$nombreFichero = 'dataUtilidades.ini';
$rutaFichero = 'config/';
$contenido = 'hola mundo!';

Utilidades::crearFichero($nombreFichero, $rutaFichero, $contenido);

echo Utilidades::leerFichero($nombreFichero, $rutaFichero).'<br/>';
?>
