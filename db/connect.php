<?php
$conn = new mysqli('127.0.0.1', 'root', '', 'borneo');

if ($conn->connect_error) {
  echo "Connection error.";
}
  else {
    echo "Connected successfully!";
  }
?>
