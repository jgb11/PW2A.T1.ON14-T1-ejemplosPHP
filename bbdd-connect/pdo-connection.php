<?php
try {
  $connection = new PDO('mysql:host=localhost;dbname=todo_app', 'root', '');

  $psInsert = $connection->prepare("INSERT INTO tasks (task, user_id) VALUES (:task, :userId)");
  $psInsert->bindParam(':task', $task);
  $psInsert->bindParam(':userId', $userId);

  $task = '1ª Tarea PDO';
  $userId = 8;
  $psInsert->execute();
  $task = '2ª Tarea PDO';
  $psInsert->execute();

  $tasksArray = array('Tarea 1 Array PDO', 'Tarea 2 Array PDO', 'Tarea 3 Array PDO');
  $userId = 8;
  foreach ($tasksArray as $task) {
    $psInsert->execute();
  }
  

  $psSelect = $connection->prepare("SELECT * FROM tasks WHERE user_id = :userId");
  $psSelect->bindParam(':userId', $userId);
  $userId = 8;
  $psSelect->execute();
  while ($task = $psSelect->fetch()) {
    echo 'ID: '.$task['id'].'<br>';
    echo 'Tarea: '.$task['task'].'<br>';
    echo 'Estado: '.$task['status'].'<br>';
    echo 'ID Usuario: '.$task['user_id'].'<hr>';
  }

  $connection = null;
} catch (PDOException $e) {
  echo 'Error en la conexión: '.$e->getMessage();
}
?>
