<?php

    $con = mysqli_connect('localhost', 'root', '', 'msqlfetchdb') or die("Connection Failed");

    $sql = "SELECT * FROM Students";
    $result = mysqli_query($con, $sql) or die("Query Failed");

    $row = mysqli_fetch_assoc($result);
?>