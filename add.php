<?php
require 'db.php';
if (!empty($_POST['task'])) {
  $stmt = $db->prepare('INSERT INTO todos (task) VALUES (:task)');
  $stmt->bindValue(':task', $_POST['task'], PDO::PARAM_STR);
  $stmt->execute();
}
header('Location: index.php');
exit;