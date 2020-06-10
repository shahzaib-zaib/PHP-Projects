<?php

        // echo "<pre>";
        // print_r($_GET);
        // echo "</pre>";

        // echo $_GET['username'];
        // echo $_GET['useremail'];
        // echo $_GET['category'];
        // echo $_GET['timing'];
        // echo $_GET['payment'];



        if(isset($_GET['submitbtn'])){
            $name = $_GET['username'];
            $email = $_GET['useremail'];
            $category = $_GET['category'];
            $time = $_GET['timing'];
            $payment = $_GET['payment'];

            echo "<h1> $name </h1>";
            echo "<h1> $email </h1>";
            echo "<h1> $category </h1>";
            echo "<h1> $time </h1>";
            echo "<h1> $payment </h1>";

        }
    ?>