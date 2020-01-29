<?php
session_start();

require 'db.php';
$email = $_POST['email'];
$pass = $_POST['pass'];
$select = "SELECT COUNT(*) as login, id, fname, email, picture, roll FROM users_info WHERE  email = '$email'";
$select_result = mysqli_query($db_connection, $select);
$after_assoc = mysqli_fetch_assoc($select_result);
if($after_assoc['login']==1){
  $select2 = "SELECT pass FROM users_info WHERE email='$email'";
  $select2_result = mysqli_query($db_connection,$select2);
  $after_assoc2 = mysqli_fetch_assoc($select2_result);
  if(password_verify($pass,$after_assoc2['pass'])){
    $_SESSION['login_korce'] = "login confirmed";
    // setcookie('timeset', 'upto', time()+20);
$_SESSION['id'] = $after_assoc['id'];
$_SESSION['fname'] = $after_assoc['fname'];
$_SESSION['email'] = $after_assoc['email'];
$_SESSION['picture'] = $after_assoc['picture'];
$_SESSION['roll'] = $after_assoc['roll'];
    header('location:das-main.php');
  }
  else{
    echo "password invalid";
  }

}

else{
    $_SESSION['login_err'] = "Please insert valid email and password";
    header('location:login.php');
}
?>
