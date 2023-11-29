<?php
$config = require 'config.php';

try {
  $conn = new PDO(
    "mysql:host={$config['db']['host']};dbname={$config['db']['dbname']}",
    $config['db']['username'],
    $config['db']['password']
  );

  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

// Use the connection...
// $stmt = $conn->prepare('SELECT * FROM table WHERE id = :id');
// $stmt->execute(['id' => $id]);
// $rows = $stmt->fetchAll();

// Close the connection
$conn = null;