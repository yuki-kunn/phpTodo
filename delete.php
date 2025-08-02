<?php
require 'db.php';
if (!empty($_GET['id'])) {
  $stmt = $db->prepare('DELETE FROM todos WHERE id = :id');
  $stmt->bindValue(':id', $_GET['id'], PDO::PARAM_INT);
  $stmt->execute();
}
header('Location: index.php');
exit;