<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <table border="1px">
    <?php
      require "db/connect.php";
      $sql = ("SELECT note FROM note");
      $result = $conn->query($sql);

      $x = 1;
      if ($result-> num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
        echo"<tr>
          <td>";
            echo"Note $x";
          echo"</td>
          <td>";
            echo $row['note'];
          echo"</td>
        </tr>";
        $x++;
      }
      }
    ?>
  </body>
</html>
