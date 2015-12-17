<?php
// crear una variable con una contraseña
// mostrar en forma de tabla la contraseña cifrada utilizando sha1, md5 y password_hash
// segundo archivo de validación
$pass = 'HolaPassword12345';
$array_cifrado = array(
  'sha1' => sha1($pass),
  'md5' => md5($pass),
  'password_hash' => password_hash($pass, PASSWORD_DEFAULT)
  );
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Tabla cifrado password</title>
    <style>
      table,td, th { border: 1px solid black; }
      table {
        width: 100%;
        border-collapse: collapse;
      }
    </style>
  </head>
  <body>
    <table>
      <tr>
        <th>Cifrado</th>
        <th>Resultado</th>
      </tr>
      <?php
      foreach ($array_cifrado as $key => $value) {
        echo "<tr>";
        echo "<td>$key</td>";
        echo "<td>$value</td>";
        echo "</tr>";
      }
      ?>
    </table>
  </body>
</html>
