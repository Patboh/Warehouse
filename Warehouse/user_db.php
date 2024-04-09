<?php
    session_start();
    include('db_connect.php');

    $sql = "SELECT * FROM user ";
    $result = mysqli_query($conn, $sql);
?>

