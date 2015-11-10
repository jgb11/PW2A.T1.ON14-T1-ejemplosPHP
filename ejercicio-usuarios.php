<?php 
  // Ejercicio: crear array multinivel usuarios, e introducir cinco usuarios (nombre, apellidos, email, telefono)
  //            y mostrar por pantalla todos los datos de todos los clientes.
  $usuarios = array(
    'usuario1' => array(
      'nombre' => 'José Luis', 
      'apellidos' => 'González Beltrán', 
      'email' => 'jgonzalez@email.com', 
      'telefono' => 976858483
      ),
    'usuario2' => array(
      'nombre' => 'Carla', 
      'apellidos' => 'Sánchez Gómez', 
      'email' => 'csanchez@email.com', 
      'telefono' => 956848484
      ),
    'usuario3' => array(
      'nombre' => 'Juan', 
      'apellidos' => 'Pérez Castañer', 
      'email' => 'jperez@email.com', 
      'telefono' => 976858483
      ),
    'usuario4' => array(
      'nombre' => 'Alberto', 
      'apellidos' => 'Dieste Serrano', 
      'email' => 'adieste@email.com', 
      'telefono' => 976858483
      ),
    'usuario5' => array(
      'nombre' => 'Jesús', 
      'apellidos' => 'Celma Bala', 
      'email' => 'jcelma@email.com', 
      'telefono' => 976858483
      )
    );

  foreach ($usuarios as $key => $value) {
    echo '<br/>' . $key . '<br/>';
    foreach ($value as $key1 => $value1) {
      echo $key1 . ': ' . $value1 . ' | ';
    }
  }

  echo "<br/><br/>";
  print_r($usuarios);

  echo "<br/><br/>";
  echo 'usuario1: <br/>' 
        . 'nombre: ' . $usuarios['usuario1']['nombre'] . ' | ' 
        . 'apellidos: ' . $usuarios['usuario1']['apellidos'] . ' | ' 
        . 'email: ' . $usuarios['usuario1']['email'] . ' | '
        . 'telefono: ' . $usuarios['usuario1']['telefono'];
  echo '<br/>usuario2: <br/>' 
        . 'nombre: ' . $usuarios['usuario2']['nombre'] . ' | ' 
        . 'apellidos: ' . $usuarios['usuario2']['apellidos'] . ' | ' 
        . 'email: ' . $usuarios['usuario2']['email'] . ' | '
        . 'telefono: ' . $usuarios['usuario2']['telefono'];
  echo '<br/>usuario3: <br/>' 
        . 'nombre: ' . $usuarios['usuario3']['nombre'] . ' | ' 
        . 'apellidos: ' . $usuarios['usuario3']['apellidos'] . ' | ' 
        . 'email: ' . $usuarios['usuario3']['email'] . ' | '
        . 'telefono: ' . $usuarios['usuario3']['telefono'];
  echo '<br/>usuario4: <br/>' 
        . 'nombre: ' . $usuarios['usuario4']['nombre'] . ' | ' 
        . 'apellidos: ' . $usuarios['usuario4']['apellidos'] . ' | ' 
        . 'email: ' . $usuarios['usuario4']['email'] . ' | '
        . 'telefono: ' . $usuarios['usuario4']['telefono'];
  echo '<br/>usuario5: <br/>' 
        . 'nombre: ' . $usuarios['usuario5']['nombre'] . ' | ' 
        . 'apellidos: ' . $usuarios['usuario5']['apellidos'] . ' | ' 
        . 'email: ' . $usuarios['usuario5']['email'] . ' | '
        . 'telefono: ' . $usuarios['usuario5']['telefono'];
?>