<?php require 'db.php'?>
<?php
    $id = $_GET['id'];

    $select = "SELECT picture FROM users_info WHERE id=$id";
    $select_result = mysqli_query($db_connection, $select);

    $after_assoc = mysqli_fetch_assoc($select_result);
    $delete_picture = "upload/imgs/".$after_assoc['picture'];
    unlink($delete_picture);

    $delete = "DELETE FROM users_info WHERE id=$id";
    $delete_result = mysqli_query($db_connection,$delete);

    header('location:trash.php');
?>
