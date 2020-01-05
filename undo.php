<?php
  require 'db.php';

  $id = $_GET['id'];
  $update = "UPDATE users_info SET status = 0 WHERE id = $id";
  $update_result = mysqli_query($db_connection, $update);
  header('location:trash.php');
 ?>
