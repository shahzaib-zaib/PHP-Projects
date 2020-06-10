<?php

        // echo "<pre>";
        // print_r($_REQUEST);
        // echo "</pre>";

        // echo $_REQUEST['username'];
        // echo $_REQUEST['useremail'];
        // echo $_REQUEST['category'];
        // echo $_REQUEST['timing'];
        // echo $_REQUEST['payment'];



        if(isset($_REQUEST['submitbtn'])){
            $name = $_REQUEST['username'];
            $email = $_REQUEST['useremail'];
            $category = $_REQUEST['category'];
            $time = $_REQUEST['timing'];
            $payment = $_REQUEST['payment'];

            echo "<h1> $name </h1>";
            echo "<h1> $email </h1>";
            echo "<h1> $category </h1>";
            echo "<h1> $time </h1>";
            echo "<h1> $payment </h1>";

        }
    ?>