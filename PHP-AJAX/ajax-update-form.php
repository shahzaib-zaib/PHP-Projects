<?php

    $student_id = $_POST["id"];
    $firstName = $_POST["first_name"];
    $lastName = $_POST["last_name"];


    $con = mysqli_connect("localhost", "root", "", "test") or die("connection Failed");

    $sql = "UPDATE students SET first_name = '{$firstName}', last_name = '{$lastName}' WHERE Id = {$student_id}";

    if(mysqli_query($con, $sql)){
        echo 1;
    }else{
        echo 0;
    }

?>