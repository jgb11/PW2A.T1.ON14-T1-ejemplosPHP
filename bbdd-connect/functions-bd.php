<?php
session_start();
function connection()
{
  $conection = new mysqli('localhost', 'root', '', 'ejemplos');
  if ($conection) {
    return $conection;
  }
  return false;
}
?>
