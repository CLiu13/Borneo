<?php
  require "../db/connect.php";
  $reminder = $_REQUEST['item'];
  $sql = "DELETE FROM note
          WHERE note='$reminder'";
  $request = $conn->query($sql);

  if ($request) {
    header("Location: user.php"); /* Redirect browser */
    exit();
  }
?>
