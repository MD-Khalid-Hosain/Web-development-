<?php
session_start();
require 'db.php';?>


 <?php

  $work_title = $_POST['work_title'];




    $uploaded_img = $_FILES['work_picture'];
    $after_explode = explode('.',$uploaded_img['name']);
    $extension = end($after_explode);
    $allowed_formet = array('jpg', 'png', 'jpeg', 'gif');

    if(in_array($extension,$allowed_formet)){
      if($uploaded_img['size']<= 8500000){
        $insert = "INSERT INTO work_section (work_title)VALUES('$work_title')";
        $insert_result = mysqli_query($db_connection, $insert);

        /*update image from file to database*/
        $last_id = mysqli_insert_id($db_connection);
        $file_name = $last_id.'.'.$extension;
        $new_location = "upload/work/".$file_name;
        move_uploaded_file($uploaded_img['tmp_name'],$new_location);

        $update = "UPDATE work_section SET work_picture='$file_name' WHERE id=$last_id";
        $update_result = mysqli_query($db_connection, $update);

        $_SESSION['work'] = "Successfully Done!!";
        header('location:work_form.php');
      }
      else{
        echo "Size problem... size should be less then 8-MB";
      }
    }
    else{
      echo "Insert valid formet";
    }




?>
