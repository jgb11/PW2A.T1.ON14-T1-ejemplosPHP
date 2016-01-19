<?php
class Vehiculo{
  protected $color;
  protected $marca;
  protected $modelo;
  protected $velocidad;

  public function __construct ($marca, $modelo, $color) {
    $this->marca = $marca;
    $this->modelo = $modelo;
    $this->color = $color;
    $this->velocidad = 0;
  }
  public function acelerar () {
    $this->velocidad += 10;
  }
  public function frenar () {
    if ($this->velocidad < 10) {
      $this->velocidad = 0;
    } else {
      $this->velocidad -= 10;
    }
  }

  public function getColor () {
    return $this->color;
  }
  public function setColor ($color) {
    $this->color = $color;
  }
  public function getMarca () {
    return $this->marca;
  }
  public function getModelo () {
    return $this->modelo;
  }
  public function getVelocidad () {
    return $this->velocidad;
  }
}

class Coche extends Vehiculo{

  public function acelerar () {
    $this->velocidad += 20;
  }
  public function claxon () {
    return 'Piiiiiiiiiiiiii!';
  }
}

class Bicicleta extends Vehiculo{

  public function acelerar () {
    $this->velocidad += 5;
  }
}

?>
