<?php session_start();
if(!isset($_SESSION['login_korce'])){
  $_SESSION['login_err'] = 'need to login';
  header('location:login.php');
}
?>
