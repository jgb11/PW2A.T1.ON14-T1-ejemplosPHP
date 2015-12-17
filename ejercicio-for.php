<?php
  $productos = array('Madera', 'Acero', 'Hierro', 'Mármol', 'Pladur', 'Plástico');

  echo '<ul>';
  for ($i=0; $i < count($productos); $i++) { 
    echo "<li>$productos[$i]</li>";
  }
  echo '<ul>';
?>