<?php
// crear clase cuenta bancaria, para gestionar cuentas bancarias
// PROPIEDADES: titular, numero de cuenta, saldo, banco, tipo
// METODOS: constructor, ingresar dinero, retirar dinero, consultar saldo, consultar titular, consultar numero cuenta, consultar banco, consultar tipo
// en otro archivo, enlazar con este archivo y instanciar una cuenta y operaciones
class CuentaBancaria{
  # PROPIEDADES
  protected $titular;
  protected $numeroCuenta;
  protected $saldo;
  protected $banco;
  protected $tipo;

  public function __construct($banco, $numeroCuenta, $titular, $tipo) {
    $this->banco = $banco;
    $this->numeroCuenta = $numeroCuenta;
    $this->titular = $titular;
    $this->tipo = $tipo;
    $this->saldo = 0;
  }

  public function ingresar($cantidad) {
    $this->saldo += $cantidad;
  }

  public function retirar($cantidad) {
    if ($this->saldo > $cantidad) {
      $this->saldo -= $cantidad;
    } else {
      echo ' No hay suficiente dinero en la cuenta ';
    }
  }

  public function getSaldo() {
    return $this->saldo;
  }

  public function getTitular() {
    return $this->titular;
  }

  public function getNumeroCuenta() {
    return $this->numeroCuenta;
  }
  public function getBanco() {
    return $this->banco;
  }
  public function getTipo() {
    return $this->tipo;
  }
}

?>
