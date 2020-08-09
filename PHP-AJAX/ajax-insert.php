<?php

    $firt_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];

    $con = mysqli_connect("localhost", "root", "", "test") or die("connection Failed");

    $sql = "INSERT INTO students(first_name, last_name) VALUES('{$first_name}', '{$last_name}')";

    if(mysqli_query($con, $sql)){
        echo 1;
    }else{
        echo 0;
    }


?>