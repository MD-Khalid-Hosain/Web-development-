<?php
session_start();
require 'db.php';?>


 <?php

  $fname = $_POST['fname'];
  $email = $_POST['email'];
  $remail = $_POST['remail'];
  $pass = $_POST['pass'];
  $hash_pass = password_hash($pass, PASSWORD_DEFAULT);
  $rpass = $_POST['rpass'];
  $uper = preg_match('@[A-Z]@', $pass);
  $lower = preg_match('@[a-z]@', $pass);
  $num = preg_match('@[0-9]@', $pass);
  $spe = preg_match('@[#,$,%,&,*]@',  $pass);
  $gen = $_POST['gen'];


   $select = "SELECT COUNT(*) as exist_email FROM users_info WHERE email = '$email'";
   $select_result = mysqli_query($db_connection, $select);
   $after_assoc = mysqli_fetch_assoc($select_result);


  if(empty($fname)){
    $_SESSION['fname_err'] = "First name please!!";
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


      if($after_assoc['exist_email']==1){
        $_SESSION['exist'] = "Email already Exist";
        header('location:singup.php');
      }
      else{
        $insert = "INSERT INTO users_info (fname,email,pass,gen,roll) VALUES ('$fname','$email','$hash_pass','$gen','5')";
     $insert_values = mysqli_query($db_connection,$insert);


     $_SESSION['success'] = "Your Registration is Successfully Done!!";
     header('location:singup.php');
      }




?>
