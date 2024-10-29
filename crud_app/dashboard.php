<?php
  session_start();
  require 'db.php';

  if(!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit;
  }


  $stmt = $pdo->query("SELECT * FROM data");
  $data = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Dashboard</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1>Dashboard</h1>
        <a href="logout.php">Logout</a>
        <a href="add.php">Add Data</a>

        <table>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
            <?php foreach ($data as $row):?>
                <tr>
                    <td><?=htmlspecialchars($row['name'])?></td>
                    <td><?=htmlspecialchars($row['description'])?></td>
                    <td>
                        <a href="edit.php?id=<? $row=['id'] ?>">Edit</a>
                        <a href="delete.php?id=<? $roe=['id'] ?>">Delete</a>
                    </td>
                </tr>
                <?php endforeach; ?>
        </table>
    </body>
</html>