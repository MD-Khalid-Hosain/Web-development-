<?php require 'db.php'?>
<?php
    $id = $_GET['id'];

    $select = "SELECT banner_picture FROM banners_section WHERE id=$id";
    $select_result = mysqli_query($db_connection, $select);

    $after_assoc = mysqli_fetch_assoc($select_result);
    $delete_picture = "upload/banners/".$after_assoc['banner_picture'];
    unlink($delete_picture);

    $delete = "DELETE FROM banners_section WHERE id=$id";
    $delete_result = mysqli_query($db_connection,$delete);

    header('location:banner_show.php');
?>
