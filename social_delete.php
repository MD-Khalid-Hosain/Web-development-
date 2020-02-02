<?php require 'db.php'?>
<?php
    $id = $_GET['id'];


    $delete = "DELETE FROM social_section WHERE id=$id";
    $delete_result = mysqli_query($db_connection,$delete);

    header('location:social_show.php');
?>
