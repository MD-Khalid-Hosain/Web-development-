<?php
  require 'db.php';

  $id = $_GET['id'];
  $update = "UPDATE about_section SET status =0";
  $update_result = mysqli_query($db_connection, $update);

  $active = "UPDATE about_section SET status =1 WHERE id = $id";
  $active_result = mysqli_query($db_connection, $active);
  header('location:about_show.php');
 ?>
