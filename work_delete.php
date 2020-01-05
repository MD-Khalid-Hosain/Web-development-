<?php require 'db.php'?>
<?php
    $id = $_GET['id'];

    $select = "SELECT work_picture FROM work_section WHERE id=$id";
    $select_result = mysqli_query($db_connection, $select);

    $after_assoc = mysqli_fetch_assoc($select_result);
    $delete_picture = "upload/work/".$after_assoc['work_picture'];
    unlink($delete_picture);

    $delete = "DELETE FROM work_section WHERE id=$id";
    $delete_result = mysqli_query($db_connection,$delete);

    header('location:work_show.php');
?>
