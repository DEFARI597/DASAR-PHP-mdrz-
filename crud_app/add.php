<?php
  session_start();
  require 'db.php';

  if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit;
  }

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $description = $_POST['description'];

    $stmt = $pdo->prepare("INSERT INTO data (name, description) VALUES (?, ?)");
    $stmt->execute([$name, $description]);
    header('Location: dashboard.php');
    exit;
  }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Add Data</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1>Add Data</h1>
        <form method="POST">
            <input type="text" name="name" placeholder="Name" required>
            <textarea name="description" placeholder="Description" required></textarea>
            <button type="submit">Add</button>
        </form>
    </body>
</html>
