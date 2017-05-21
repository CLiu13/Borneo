<?php
  require 'db/connect.php';
  $reminder = $_REQUEST['reminder'];

  $sql = "INSERT INTO note(note)
          VALUES ('$reminder')";
  $result = $conn->query($sql);
  var_dump($result);

  if ($result) {
    echo "Reminder saved.";
  }
?>
