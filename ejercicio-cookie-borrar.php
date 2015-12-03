<?php 
foreach ($_COOKIE as $key => $value) {
  setcookie($key, $value, time() - 1);
}
echo 'Cookies borradas!';
?>