<?php
session_start();

require 'db.php';
$email = $_POST['email'];
$pass = $_POST['pass'];
$select = "SELECT COUNT(*) as login, fname, email, picture, roll FROM users_info WHERE  email = '$email' and pass = '$pass'";
$select_result = mysqli_query($db_connection, $select);
$after_assoc = mysqli_fetch_assoc($select_result);
if($after_assoc['login']==1){
    $_SESSION['login_korce'] = "login confirmed";
    // setcookie('timeset', 'upto', time()+20);
$_SESSION['fname'] = $after_assoc['fname'];
$_SESSION['email'] = $after_assoc['email'];
$_SESSION['picture'] = $after_assoc['picture'];
$_SESSION['roll'] = $after_assoc['roll'];
    header('location:das-main.php');

}
else{
    $_SESSION['login_err'] = "Please insert valid email and password";
    header('location:login.php');
}
?>
