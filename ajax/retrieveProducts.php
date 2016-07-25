<?php
$connection = new mysqli('localhost', 'root', '', 'ejemplos');

$result = $connection->query("SELECT * FROM products");
?>
<table border="1">
<tr>
  <th>Referencia</th>
  <th>Nombre</th>
  <th>Marca</th>
  <th>Precio</th>
  <th>Stock</th>
</tr>
<?php
if($result)
{
  while ($product = $result->fetch_object())
  {
    echo '<tr>';
    echo '<td>'.$product->referencia.'</td>';
    echo '<td>'.$product->nombre.'</td>';
    echo '<td>'.$product->marca.'</td>';
    echo '<td>'.$product->precio.' €</td>';
    echo '<td>'.$product->stock.'</td>';
    echo '</tr>';
  }
}
  $connection->close();
?>
</table>
