<?php
  session_start();
  $_SESSION['username'] = $_REQUEST['username'];

  header("Location: user.php"); /* Redirect browser */
  exit();
?>
