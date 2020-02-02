<?php
session_start();
require 'db.php';?>


 <?php

  $why_choose = $_POST['why_choose'];
  $about_des = $_POST['about_des'];



    $uploaded_img = $_FILES['about_picture'];
    $after_explode = explode('.',$uploaded_img['name']);
    $extension = end($after_explode);
    $allowed_formet = array('jpg', 'png', 'jpeg', 'gif','JPG');

    if(in_array($extension,$allowed_formet)){
      if($uploaded_img['size']<= 8500000){
        $insert = "INSERT INTO about_section (about_des,why_choose)VALUES('$about_des','$why_choose')";
        $insert_result = mysqli_query($db_connection, $insert);

        /*update image from file to database*/
        $last_id = mysqli_insert_id($db_connection);
        $file_name = $last_id.'.'.$extension;
        $new_location = "upload/about/".$file_name;
        move_uploaded_file($uploaded_img['tmp_name'],$new_location);

        $update = "UPDATE about_section SET about_picture='$file_name' WHERE id=$last_id";
        $update_result = mysqli_query($db_connection, $update);

        $_SESSION['about'] = "Successfully Done!!";
        header('location:about_form.php');
      }
      else{
        echo "Size problem... size should be less then 8-MB";
      }
    }
    else{
      echo "Insert valid formet";
    }




?>
