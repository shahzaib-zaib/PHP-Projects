<?php

    $student_id = $_POST["id"];

    $con = mysqli_connect("localhost", "root", "", "test") or die("connection Failed");

    $sql = "DELETE FROM students WHERE Id = {$student_id}";

    if(mysqli_query($con, $sql)){
        echo 1;
    }else{
        echo 0;
    }

?>