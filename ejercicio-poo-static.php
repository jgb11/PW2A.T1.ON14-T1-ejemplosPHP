<?php
class PhpMethods{
  public static function cifrarPassword($password) {
    return password_hash($password, PASSWORD_DEFAULT);
  }
  public static function descifrarPassword($password, $passwordCifrado) {
    return password_verify($password, $passwordCifrado);
  }

  public static function calcularAreaCirculo($radio) {
      return 3.141592 * $radio * $radio;
  }
}
?>
