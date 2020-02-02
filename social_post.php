<?php
session_start();
require 'db.php';?>


 <?php

  $social_icon = $_POST['social_icon'];
  $social_link = $_POST['social_link'];




        $insert = "INSERT INTO social_section (social_icon,social_link)VALUES('$social_icon','$social_link')";
        $insert_result = mysqli_query($db_connection, $insert);


        $_SESSION['service'] = "Successfully Done!!";
        header('location:social_form.php');


?>
