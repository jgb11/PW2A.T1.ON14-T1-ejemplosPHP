<?php 
session_start();
session_destroy(); // al borrar la sesión se borran también las variables de sesión
echo 'Sesión borrada!';
?>