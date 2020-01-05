<?php
session_start();
require 'db.php';?>


 <?php

  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $email = $_POST['email'];
  $remail = $_POST['remail'];
  $pass = $_POST['pass'];
  $rpass = $_POST['rpass'];
  $uper = preg_match('@[A-Z]@', $pass);
  $lower = preg_match('@[a-z]@', $pass);
  $num = preg_match('@[0-9]@', $pass);
  $spe = preg_match('@[#,$,%,&,*]@',  $pass);
  $gen = $_POST['gen'];
  $country = $_POST['country'];
  $date = $_POST['date'];
  $university = $_POST['university'];
  $prog = $_POST['prog'];
  $skills =$_POST['skills'];
  $skills_show = implode(",", $skills);
  $hobbies = $_POST['hobbies'];
  $hobbies_show = implode(",", $hobbies);
  $comment = $_POST['comment'];
  $roll = $_POST['roll'];
   date_default_timezone_set('Asia/Dhaka');
   $create_datetime = date('y-m-d h:i:s');

   $select = "SELECT COUNT(*) as exist_email FROM users_info WHERE email = '$email'";
   $select_result = mysqli_query($db_connection, $select);
   $after_assoc = mysqli_fetch_assoc($select_result);


  if(empty($fname)){
    $_SESSION['fname_err'] = "First name please!!";
    header('location:register.php');
  }
  elseif (empty($lname)) {
    $_SESSION['lname_err'] = "Last name please!!";
    header('location:register.php');
  }
  
  elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $_SESSION['email_err'] = "Requerd valid email";
    header('location:register.php');
  }
  elseif (!filter_var($remail, FILTER_VALIDATE_EMAIL)) {
    $_SESSION['remail_err'] = "Requerd valid email";
    header('location:register.php');
  }
  elseif ($email != $remail) {
    $_SESSION['remail_err'] = "Email is not matching";
    header('location:register.php');
  }
  elseif(empty($pass)){
    $_SESSION['pass_err'] = "Password riquered";
    header('location:register.php');
  }
  elseif(empty($rpass)){
    $_SESSION['universty_err'] = "Re-type-Password ";
    header('location:register.php?rpass_err='.$err_msg);
  }
  elseif(!$uper || !$lower || !$num || !$spe || strlen($pass) < 8 ){
    $_SESSION['universty_err'] = "combination of num, char, uper, lower";
    header('location:index.php?pass_err='.$err_msg);
  }
  elseif($pass != $rpass){
    $_SESSION['universty_err'] = "Password is not matching";
    header('location:register.php?rpass_err='.$err_msg);
  }
  elseif(empty($gen)){
    $_SESSION['universty_err'] = "Your Gender?";
    header('location:register.php?gen_err='.$err_msg);
  }
  elseif(empty($country)){
    $_SESSION['universty_err'] = "Your country please!!";
    header('location:register.php?country_err='.$err_msg);
  }
  elseif(empty($date)){
    $_SESSION['universty_err'] = "Please date!!";
    header('location:register.php?date_err='.$err_msg);
  }
  elseif(empty($university)){
    $_SESSION['universty_err'] = "Select Your University";
    header('location:register.php');
  }
  elseif(empty($prog)){
      $_SESSION['prog_err'] = "Select Your program";
    header('location:register.php');
  }
  elseif(empty($skills)){
      $_SESSION['skills_err'] = "Select Skills you have";
    header('location:register.php');
  }
  elseif(empty($hobbies)){
    $_SESSION['hobbies_err'] = "please select some items";
    header('location:register.php');
  }
  elseif(str_word_count($comment)>6){
    $_SESSION['comment_err'] = "Comment should be less then 6 Words!";
    header('location:register.php');
  }
  elseif(empty($comment)){
    $_SESSION['comment_err'] = "Comment Please!!";
    header('location:register.php');
  }

else{
    $uploaded_img = $_FILES['picture'];
    $after_explode = explode('.', $uploaded_img['name']);
    $extension = end($after_explode);
    $allowed_formet = array('jpg','png', 'jpeg', 'gif');

    if(in_array($extension, $allowed_formet)){
        if($uploaded_img['size'] <= 850000){
          if($after_assoc['exist_email']==1){
            $_SESSION['exist'] = "Email already Exist";
            header('location:register.php');
          }
          else{
            $insert = "INSERT INTO users_info (fname,email,pass,gen,country,birth_date,university,prog,skills,create_datetime,hobbies,user_comment,roll) VALUES ('$fname','$email','$pass','$gen','$country','$date','$university','$prog','$skills_show','$create_datetime',
            '$hobbies_show','$comment','$roll')";
         $insert_values = mysqli_query($db_connection,$insert);



         $last_id = mysqli_insert_id($db_connection);
         $file_name = $last_id.'.'.$extension;
         $new_location = "upload/imgs/".$file_name;
         move_uploaded_file($uploaded_img['tmp_name'],$new_location);

         $update = "UPDATE users_info SET picture='$file_name' WHERE id=$last_id";
         $update_result = mysqli_query($db_connection,$update);


         $_SESSION['success'] = "Your Registration is Successfully Done!!";
         header('location:register.php');
          }

        }
        else{
            echo "size a somossha";
        }
    }
    else{
        echo "thik nai";
    }


}


?>
