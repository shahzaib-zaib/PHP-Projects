<?php
    $con = mysqli_connect('localhost:8080', 'root', '', 'firstDB');
    if ($con == true) {
        echo "Connection Established";
    } else {
        echo "Connection Not Established";

    }
    

?>