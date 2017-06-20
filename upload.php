<?php

if (is_uploaded_file($_FILES['avatar']['tmp_name'])) {
    if (!is_dir('uploads')) {
      mkdir('uploads');
    }
  // validación tamaño
  if ($_FILES['avatar']['size'] <= 8388608) {
      $tipo = $_FILES['avatar']['type'];
    // validación tipo de archivo
    if ($tipo == 'image/gif' || $tipo == 'image/jpeg' || $tipo == 'image/png') {

      // uniqid genera un id único para que no se sobreescriban los archivos subidos
      $destino = 'uploads/'.uniqid().'_'.basename($_FILES['avatar']['name']);

        if (move_uploaded_file($_FILES['avatar']['tmp_name'], $destino)) {
          echo 'Archivo subido correctamente';
          echo "<img src='$destino'>";
        } else {
          echo 'ERROR al subir el archivo';
        }
    } else {
      echo 'Tipo de archivo no válido';
    }
  } else {
    echo 'Archivo demasiado grande';
  }
}
