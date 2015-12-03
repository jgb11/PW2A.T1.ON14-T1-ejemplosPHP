<?php 
if (isset($_COOKIE['micookie'])) {
  echo 'micookie: ' . $_COOKIE['micookie'] . '<br/>';
} else {
  echo 'No hay cookie micookie!<br/>';
}

if (isset($_COOKIE['cookieCaduca'])) {
  echo 'cookieCaduca: ' . $_COOKIE['cookieCaduca'] . '<br/>';
} else {
  echo 'No hay cookie cookieCaduca!<br/>';
}

if (isset($_COOKIE['contadorVisitas'])) {
  echo 'contadorVisitas: ' . $_COOKIE['contadorVisitas'] . '<br/>';
} else {
  echo 'No hay cookie contadorVisitas!<br/>';
}
?>