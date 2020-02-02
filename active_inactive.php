<?php
  require 'db.php';

  $id = $_GET['id'];
  $select = "SELECT * FROM service_section WHERE id=$id";
  $select_result = mysqli_query($db_connection, $select);
  $after_assoc = mysqli_fetch_assoc($select_result);

if($after_assoc['status']==0)
{
  $active = "UPDATE service_section SET status = 1 WHERE id = $id";
  $active_result = mysqli_query($db_connection, $active);
  header('location:service_show.php');
  }
  else{
    $deactive = "UPDATE service_section SET status = 0 WHERE id = $id";
    $deactive_result = mysqli_query($db_connection, $deactive);
    header('location:service_show.php');
  }
 ?>
