<?php require 'db.php';
$todos = $db->query('SELECT * FROM todos ORDER BY created_at DESC')->fetchAll();
?>
<!DOCTYPE html>
<html>
<head><link rel="stylesheet" href="style.css"></head>
<body>
  <h1>My TODO App</h1>
  <form action="add.php" method="POST">
    <input type="text" name="task" required>
    <button type="submit">Add</button>
  </form>
  <ul>
    <?php foreach ($todos as $todo): ?>
      <li>
        <?= htmlspecialchars($todo['task']) ?>
        <a href="delete.php?id=<?= $todo['id'] ?>">🗑</a>
      </li>
    <?php endforeach; ?>
  </ul>
</body>
</html>