<?php

include_once 'config.php';

try {
  $sql = "SELECT * FROM Tasks;";
  $stmt = $pdo->query($sql);
  $qry_tasks = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
  echo "Error: " . $e->getMessage();
}
