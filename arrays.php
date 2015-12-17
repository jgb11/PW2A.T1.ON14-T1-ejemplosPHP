<?php 

// $nota1 = 7;
// $nota2 = 4;
// $nota3 = 8;
// $nota4 = 4;

$arrayNotas = array(7, 4, 8, 4, 7, 9, 4);

foreach ($arrayNotas as $key => $val) {
  echo "arrayNotas ** $key = $val <br/>";
}

$arrayPersona = array(
  "Nombre" => "Juan",
  "Apellidos" => "Perez Morcillo",
  "Telefono" => "657847845",
  "Edad" => 25,
  "NotaMedia" => 7.98,
  "Autorizado" => true
  );

echo "<br/>";
foreach ($arrayPersona as $key => $val) {
  echo "arrayPersona ** $key = $val <br/>";
}

$arrayAsociativoNotas = array(
  'Juan' => 4,
  'Pedro' => 6,
  'Paco' => 3,
  'Fernando' => 4
  );

echo "<br/>";
foreach ($arrayAsociativoNotas as $key => $val) {
  echo "arrayAsociativoNotas ** $key = $val <br/>";
}

?>