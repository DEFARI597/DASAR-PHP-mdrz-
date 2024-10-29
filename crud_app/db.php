<?php
  $host = 'localhost';
  $dbname = 'crud_app';
  $username = 'root';
  $password = '';

   try{
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connection Succes";
   } catch (PDOException $e) {
    echo "Connection Failed:". $e->getMessage();
   }
?>