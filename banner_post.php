<?php
session_start();
require 'db.php';?>


 <?php

  $banner_title = $_POST['banner_title'];
  $banner_des = $_POST['banner_des'];
  $banner_btn = $_POST['banner_btn'];




    $uploaded_img = $_FILES['banner_picture'];
    $after_explode = explode('.', $uploaded_img['name']);
    $extension = end($after_explode);
    $allowed_formet = array('jpg','png', 'jpeg', 'gif');

    if(in_array($extension, $allowed_formet)){
        if($uploaded_img['size'] <= 8500000){
          $insert = "INSERT INTO banners_section (banner_title,banner_des,banner_btn) VALUES ('$banner_title','$banner_des','$banner_btn')";
          $insert_values = mysqli_query($db_connection,$insert);



       $last_id = mysqli_insert_id($db_connection);
       $file_name = $last_id.'.'.$extension;
       $new_location = "upload/banners/".$file_name;
       move_uploaded_file($uploaded_img['tmp_name'],$new_location);

       $update = "UPDATE banners_section SET banner_picture='$file_name' WHERE id=$last_id";
       $update_result = mysqli_query($db_connection,$update);


       $_SESSION['banner'] = "Successfully Done!!";
       header('location:banner_form.php');
        }
          else{
              echo "size a somossha";
          }

        }

    else{
        echo "thik nai";
    }

?>
