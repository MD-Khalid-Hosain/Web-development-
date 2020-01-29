<?php
session_start();
require 'db.php';?>


 <?php

  $blog_title = $_POST['blog_title'];
  $id = $_POST['user_id'];
  $blog_des = $_POST['blog_des'];




        $insert = "INSERT INTO blog_section (blog_title,blog_des,user_id)VALUES('$blog_title','$blog_des',$id)";
        $insert_result = mysqli_query($db_connection, $insert);


        $_SESSION['blog'] = "Successfully Done!!";
        header('location:blog_form.php');


?>
