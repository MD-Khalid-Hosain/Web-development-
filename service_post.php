<?php
session_start();
require 'db.php';?>


 <?php

  $service_title = $_POST['service_title'];
  $service_des = $_POST['service_des'];



    $uploaded_img = $_FILES['service_picture'];
    $after_explode = explode('.',$uploaded_img['name']);
    $extension = end($after_explode);
    $allowed_formet = array('jpg', 'png', 'jpeg', 'gif');

    if(in_array($extension,$allowed_formet)){
      if($uploaded_img['size']<= 8500000){
        $insert = "INSERT INTO service_section (service_title,service_des)VALUES('$service_title','$service_des')";
        $insert_result = mysqli_query($db_connection, $insert);

        /*update image from file to database*/
        $last_id = mysqli_insert_id($db_connection);
        $file_name = $last_id.'.'.$extension;
        $new_location = "upload/service/".$file_name;
        move_uploaded_file($uploaded_img['tmp_name'],$new_location);

        $update = "UPDATE service_section SET service_picture='$file_name' WHERE id=$last_id";
        $update_result = mysqli_query($db_connection, $update);

        $_SESSION['service'] = "Successfully Done!!";
        header('location:service_form.php');
      }
      else{
        echo "Size problem... size should be less then 8-MB";
      }
    }
    else{
      echo "Insert valid formet";
    }




?>
