<?php
session_start();
require 'db.php';?>


 <?php

  $user_name = $_POST['user_name'];
  $user_email = $_POST['user_email'];
  $user_comment= $_POST['user_comment'];


  $insert = "INSERT INTO user_commet_section (user_name,user_email,user_comment) VALUES ('$user_name','$user_email','$user_comment')";
  $insert_result = mysqli_query($db_connection,$insert);

  header('location:index.php');







?>
