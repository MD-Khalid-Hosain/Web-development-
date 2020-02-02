<?php
  require 'db.php';

  $id = $_GET['id'];
  $select = "SELECT * FROM social_section WHERE id=$id";
  $select_result = mysqli_query($db_connection, $select);
  $after_assoc = mysqli_fetch_assoc($select_result);

if($after_assoc['status']==0)
{
  $active = "UPDATE social_section SET status = 1 WHERE id = $id";
  $active_result = mysqli_query($db_connection, $active);
  header('location:social_show.php');
  }
  else{
    $deactive = "UPDATE social_section SET status = 0 WHERE id = $id";
    $deactive_result = mysqli_query($db_connection, $deactive);
    header('location:social_show.php');
  }
 ?>
