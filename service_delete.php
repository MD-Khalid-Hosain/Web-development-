<?php require 'db.php'?>
<?php
    $id = $_GET['id'];

    $select = "SELECT service_picture FROM service_section WHERE id=$id";
    $select_result = mysqli_query($db_connection, $select);

    $after_assoc = mysqli_fetch_assoc($select_result);
    $delete_picture = "upload/service/".$after_assoc['service_picture'];
    unlink($delete_picture);

    $delete = "DELETE FROM service_section WHERE id=$id";
    $delete_result = mysqli_query($db_connection,$delete);

    header('location:service_show.php');
?>
