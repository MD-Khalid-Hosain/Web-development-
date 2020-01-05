<?php require 'db.php'?>


<?php
$id = $_POST['id'];
$fname = $_POST['fname'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$gen = $_POST['gen'];
$country = $_POST['country'];
$university = $_POST['university'];
$date = $_POST['date'];
$hobbies = $_POST['hobbies'];
$show_hobbies = implode(",",$hobbies);
$uper = preg_match('@[A-Z]@', $pass);
$lower = preg_match('@[a-z]@', $pass);
$num = preg_match('@[0-9]@', $pass);
$spe = preg_match('@[#,$,%,&,*]@',  $pass);
if(empty($fname)){
    $err_msg = "First name please!!";
    header('location:edit_info.php?fname_err='.$err_msg);
  }
 elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $err_msg = "Requerd valid email";
    header('location:edit_info.php?email_err='.$err_msg);
 }
 elseif(empty($pass)){
    $err_msg = "Password riquered";
    header('location:edit_info.php?pass_err='.$err_msg);
  }
elseif(!$uper || !$lower || !$num || !$spe || strlen($pass) < 8 ){
    $err_msg = "combination of num, char, uper, lower";
    header('location:edit_info.php?pass_err='.$err_msg);
  }
elseif(empty($gen)){
    $err_msg = "Your Gender?";
    header('location:edit_info.php?gen_err='.$err_msg);
  }
elseif(empty($country)){
    $err_msg = "Your country please!!";
    header('location:edit_info.php?country_err='.$err_msg);
  }
elseif(empty($university)){
    $err_msg = "Select Your University";
    header('location:edit_info.php?universty_err='.$err_msg);
  }
  elseif(empty($date)){
    $err_msg = "Please date!!";
    header('location:edit_info.php?date_err='.$err_msg);
  }
  elseif($_FILES['picture']['name'] != ''){

      $select = "SELECT picture FROM users_info WHERE id=$id";
      $select_result = mysqli_query($db_connection, $select);

      $after_assoc = mysqli_fetch_assoc($select_result);
      $delete_picture = "upload/imgs/".$after_assoc['picture'];
      unlink($delete_picture);

      $uploaded_img = $_FILES['picture'];
      $after_exlode = explode('.',$uploaded_img['name']);
      $extension = end($after_exlode);
      $allowed_fomret = array('jpg','png', 'jpeg', 'gif');

    if($uploaded_img['size'] <= 850000){

            $update = "UPDATE users_info SET fname='$fname', email='$email', pass='$pass', gen='$gen', country='$country', university='$university', birth_date='$date', hobbies='$show_hobbies' WHERE id=$id";
            $update_result = mysqli_query($db_connection,$update);

            $file_name = $id.'.'.$extension;
            $new_location = "upload/imgs/".$file_name;
            move_uploaded_file($uploaded_img['tmp_name'],$new_location);

            $update_picture = "UPDATE users_info SET picture='$file_name' WHERE id=$id";
            $update_picture_result = mysqli_query($db_connection,$update_picture);

            header('location:user_info_table.php');
        }
        else{
            echo "size a somossha";
        }
}
else{
  $update = "UPDATE users_info SET fname='$fname', email='$email', pass='$pass', gen='$gen', country='$country', university='$university', birth_date='$date',hobbies='$show_hobbies' WHERE id=$id";
  $update_result = mysqli_query($db_connection,$update);

    header('location:user_info_table.php');

  }

?>
