<?php

    $student_id = $_POST["id"];

    $con = mysqli_connect("localhost", "root", "", "test") or die("connection Failed");

    $sql = "DELETE FROM students WHERE Id = {$student_id}";

    $result = mysqli_query($con, $sql) or die("SQL Query Failed.");

?>