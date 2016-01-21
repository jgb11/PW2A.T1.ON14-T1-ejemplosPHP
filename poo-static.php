<?php
class Html{
  public static function header($titulo) {
    return "<title>$titulo</title>";
  }

  public static function link($texto, $url, $clase = null) {
    if (isset($clase)) {
      return "<a class='$clase' href='$url'>$texto<a/>";
    } else {
      return "<a href='$url'>$texto<a/>";
    }
  }

  public static function tabs($etiquetas) {
    $result = "<ul class='nav nav-tabs'>";
    foreach ($etiquetas as $etiqueta) {
      $result .= "<li><a href='#'>$etiqueta</a></li>";
    }
    $result .= "</ul>";
    return $result;
  }

  public static function alert($msg, $tipo = 'warning') {
    return "<div class='alert alert-$tipo'>$msg</div>";
  }
}
?>
