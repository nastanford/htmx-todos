<?php

$dsn = 'mysql:host=localhost;dbname=htmx-todos';
$username = 'root';
$password = '';

try {
  $pdo = new PDO($dsn, $username, $password);
  // Set the PDO error mode to exception
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
