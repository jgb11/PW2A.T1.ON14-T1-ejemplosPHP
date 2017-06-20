<?php 
session_start(); // se detecta la sesión activa y se utiliza
foreach ($_SESSION as $key => $value) {
	echo 'Variable guardada en sesion: ' . $key . ' | ' . $value . '<br/>';
}
?>