<?php

    $con = mysqli_connect('localhost', 'root', '', 'msqlfetchdb') or die("Connection Failed");

    $sql = "SELECT * FROM Students";
    $result = mysqli_query($con, $sql) or die("Query Failed");


    #=========================== Mysql Fetch Assoc ===========================#

    $row = mysqli_fetch_assoc($result);
    echo "<pre>";
    print_r($row);
    echo "</pre>";

    echo $row['first_name'] . " " . $row['last_name']. "<br>";

    while($row = mysqli_fetch_assoc($result)){
        echo $row['first_name'] . " " . $row['last_name']."<br>";
    }




    #=========================== Mysql Fetch Row ===========================#

    $sql1 = "SELECT * FROM Students";
    $result1 = mysqli_query($con, $sql1) or die("Query Failed");

    $row1 = mysqli_fetch_row($result1);
    echo "<pre>";
    print_r($row1);
    echo "</pre>";
    echo $row1[1] . " " . $row1[2]. "<br>";

    while($row1 = mysqli_fetch_row($result1)){
        echo $row1[1] . " " . $row1[2]. "<br>";
    }




    #=========================== Mysql Fetch Array ===========================#

    $sql2 = "SELECT * FROM Students";
    $result2 = mysqli_query($con, $sql2) or die("Query Failed");

    $row2 = mysqli_fetch_array($result2,MYSQLI_ASSOC); // Fetch array gives 2 types of result and can pass 2 parameter "MYSQLI_ASSOC" or "MYSQLI_NUM" Default Value is MYSQLI_BOTH
    echo "<pre>";
    print_r($row2);
    echo "</pre>";
    echo $row2[1] . " " . $row2[2]. "<br>";

    while($row2 = mysqli_fetch_row($result2)){
        echo $row2[1] . " " . $row2[2]. "<br>";
    }




    #=========================== Mysql Fetch All ===========================#

    $sql3 = "SELECT * FROM Students";
    $result3 = mysqli_query($con, $sql3) or die("Query Failed");

    $row3 = mysqli_fetch_all($result3, MYSQLI_ASSOC); // Fetch array gives 2 types of result and can pass 2 parameter "MYSQLI_ASSOC" or "MYSQLI_NUM" Default Value is MYSQLI_BOTH
    echo "<pre>";
    print_r($row3);
    echo "</pre>";
    
    foreach ($row3 as $data) {
        echo $data['Id'] . " " . $data['first_name']. " " . $data['last_name'] . "<br>";
    }

?>