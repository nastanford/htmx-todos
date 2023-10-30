<?php
if (isset($_POST['taskName'])) {
  $taskName = $_POST['taskName'];
  $dueDate = $_POST['dueDate'];
  $priority = $_POST['priority'];
  $notes = $_POST['notes'];
  $label = $_POST['label'];
  $category = $_POST['category'];

  include_once '../models/config.php';

  // Perform database insertion (adjust these lines based on your database connection)
  try {

    $stmt = $pdo->prepare('INSERT INTO tasks (task_name, due_date, priority, notes, label, category) VALUES (?, ?, ?, ?, ?, ?)');
    $stmt->execute([$taskName, $dueDate, $priority, $notes, $label, $category]);

    // Return a success message
    echo 'Task added successfully!';
  } catch (PDOException $e) {
    // Handle database connection errors
    echo 'Error: ' . $e->getMessage();
  }
} else {
  // Handle non-POST requests
  echo 'Invalid request method!';
}
