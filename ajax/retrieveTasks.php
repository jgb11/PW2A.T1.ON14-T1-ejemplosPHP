<?php
$connection = new mysqli('localhost', 'root', '', 'tasks2');

$result = $connection->query("SELECT * FROM tasks");

echo '<table border="1">';
while ($task = $result->fetch_assoc()) {
  echo '<tr>';
  echo '<td>'.$task['task'].'</td>';
  echo '<td>'.$task['status'].'</td>';
  echo '</tr>';
}
echo '</table>'
?>
