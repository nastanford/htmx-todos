<?php
include_once '../models/qry_tasks.php';
?>

<table class="table table-sm">
  <tr>
    <th>Edit</th>
    <th>Task Name</th>
    <th>Created At</th>
    <th>Due Date</th>
    <th>Priority</th>
    <th>Notes</th>
    <th>Label</th>
    <th>Category</th>
    <th>Completed</th>
    <th>Delete</th>
  </tr>
  <?php
  foreach ($qry_tasks as $row) {
    echo '<tr>';
    echo '<td>';
    echo '<button class="btn btn-primary btn-sm">Edit</button>';
    echo '</td>';
    echo '<td>' . $row['task_name'] . '</td>';
    echo '<td>' . $row['created_at'] . '</td>';
    echo '<td>';
    if ($row['due_date'] !== null) {
      echo date('m/d/Y', strtotime($row['due_date']));
    } else {
      echo '';
    }
    echo '</td>';
    echo '<td>' . $row['priority'] . '</td>';
    echo '<td>' . $row['notes'] . '</td>';
    echo '<td>' . $row['label'] . '</td>';
    echo '<td>' . $row['category'] . '</td>';
    echo '<td>' . ($row['is_completed'] ? 'Yes' : 'No') . '</td>';
    echo '<td>';
    echo '<button class="btn btn-danger btn-sm ml-2">Delete</button>';
    echo '</td>';
    echo '</tr>';
  }
  echo '</table>';

  // Add button
  echo '';
  ?>