<?php
class Coche{
  # propiedades
  private $color;
  private $marca;
  private $modelo;
  private $velocidad;
  const NUM_RUEDAS = 4; # esta propiedad tendra un valor inicial fijo para todos los objetos de esta clase

  # metodos
  public function __construct ($marca, $modelo, $color) {
    // al acceder a una propiedad o método desde dentro del objeto hay que hacerlo mediante $this->
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
?>
