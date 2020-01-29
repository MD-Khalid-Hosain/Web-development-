<?php
  require 'db.php';

 $id = $_GET['user_id'];

  $select = "SELECT * FROM blog_section WHERE id=$id";
  $select_result = mysqli_query($db_connection, $select);
  $after_assoc = mysqli_fetch_assoc($select_result);

if($after_assoc['status']==0)
{
  $active = "UPDATE blog_section SET status = 1 WHERE user_id = $id";
  $active_result = mysqli_query($db_connection, $active);
  header('location:pending_blog.php');
  }
  else{
    $deactive = "UPDATE blog_section SET status = 0 WHERE user_id = $id";
    $deactive_result = mysqli_query($db_connection, $deactive);
    header('location:pending_blog.php');
  }
 ?>
