<?php

    $con = mysqli_connect('localhost', 'root', '', 'msqlfetchdb') or die("Connection Failed");

    $sql = "SELECT * FROM Students";
    $result = mysqli_query($con, $sql) or die("Query Failed");


    #=========================== Mysql Fetch Assoc ===========================#

    //$row = mysqli_fetch_assoc($result);
    // echo "<pre>";
    // print_r($row);
    // echo "</pre>";

    //echo $row['first_name'] . " " . $row['last_name'];

    while($row = mysqli_fetch_assoc($result)){
        echo $row['first_name'] . " " . $row['last_name']."<br>";
    }



?>