<?php
  $rows = 5;
  $columns = 7;

  echo '<table border="1">';
  for ($i=0; $i < $rows; $i++) {
    echo '<tr>';
    for ($j=0; $j < $columns; $j++) {
      echo '<td>Celda</td>';
    }
    echo '</tr>';
  }
  echo '<table>';
?>
