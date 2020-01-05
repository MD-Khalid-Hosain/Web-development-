<?php
  require 'db.php';

  $id = $_GET['id'];
  $update = "UPDATE users_info SET status = 1 WHERE id = $id";
  $update_result = mysqli_query($db_connection, $update);
  header('location:user_info_table.php');
 ?>
