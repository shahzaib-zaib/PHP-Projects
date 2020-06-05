<?php

    $con = mysqli_connect('localhost:3306', 'root', '', 'companydb');
    $fetch_query = "select * from employee";
    $execute = mysqli_query($con, $fetch_query);
    $totalrows = mysqli_num_rows($execute);

    echo "<h2>Total Employees in Company : $totalrows</h2>"

    $records = mysqli_fetch_assoc($execute);


?>