<?php
require 'ejercicio-poo-clases.php';

$cuentaBancaria = new CuentaBancaria('Santander', '00112233', 'Juan Fernandez', 'Ahorro');

echo '<br/>Titular: '.$cuentaBancaria->getTitular().'<br/>';
echo '<br/>Número cuenta: '.$cuentaBancaria->getNumeroCuenta().'<br/>';
echo '<br/>Banco: '.$cuentaBancaria->getBanco().'<br/>';
echo '<br/>Tipo: '.$cuentaBancaria->getTipo().'<br/>';


echo '<br/>Saldo en cuenta(ingresar 200): ';
$cuentaBancaria->ingresar(200);
echo $cuentaBancaria->getSaldo().'€<br/>';

echo '<br/>Saldo en cuenta(retirar 100): ';
$cuentaBancaria->retirar(100);
echo $cuentaBancaria->getSaldo().'€<br/>';

echo '<br/>Saldo en cuenta(retirar 150): ';
$cuentaBancaria->retirar(150);
echo $cuentaBancaria->getSaldo().'€<br/>';

?>
