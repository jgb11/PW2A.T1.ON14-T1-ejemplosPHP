<?php
// namespace MiProyecto\Util;
require 'poo-utilidades.php';
require 'vendor/nesbot/carbon/src/Carbon/Carbon.php';

use \MiProyecto\Util\Utilidades as util;
use Carbon\Carbon;

echo Carbon::now().'<br/>';
// echo __NAMESPACE__.'<br/>';
// echo \MiProyecto\Utilidades::generarPass(30).'<br/>';
echo util::generarPass(30).'<br/>';
echo util::generarPass(30).'<br/>';

$nombreFichero = 'dataUtilidades.ini';
$rutaFichero = 'config/';
$contenido = "hola mundo!\r\n";

util::crearFichero($nombreFichero, $rutaFichero, $contenido);

echo util::leerFichero($nombreFichero, $rutaFichero).'<br/>';
?>
