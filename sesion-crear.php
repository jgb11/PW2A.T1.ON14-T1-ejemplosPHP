<?php 
session_start(); 
// - no necesita llevar parámetros, opcionalmente se le puede pasar un id de sesión
// - si existe una sesión activa session_start() la recupera en vez de crear una nueva
// - siempre hay que utilizarla para usar sesiones
// - debe ejecutarse antes de las cabeceras HTML y de cualquier contenido de la página
// (incluso una línea en blanco)

$_SESSION['nombre'] = 'Juan';
$_SESSION['apellidos'] = 'González';
$_SESSION['email'] = 'email@email.com';
$_SESSION['validated'] = true;

echo 'Sesión y variables de sesión creadas!';
?>