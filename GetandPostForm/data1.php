<?php

        if(isset($_POST['submitbtn'])){
            $name = $_POST['username'];
            $email = $_POST['useremail'];
            $quantity = $_POST['quan'];
            $category = $_POST['category'];
            $movie = $_POST['movie'];
            $payment = $_POST['payment'];

            echo "<h1> $name </h1>";
            echo "<h1> $email </h1>";
            echo "<h1> $quantity </h1>";
            echo "<h1> $category </h1>";
            echo "<h1> $movie </h1>";
            echo "<h1> $payment </h1>";


            if($category == "silver")
            {
               if($movie == "maulajutt")
               {
                   $totalbill = $quantity * 500;
                   echo "<h1>Total Bill is : $totalbill<h1>";
               }
               else if($movie == "warr")
               {
                   $totalbill = $quantity * 400;
                   echo "<h1>Total Bill is : $totalbill<h1>";
               }
               else if($movie == "joker")
               {
                   $totalbill = $quantity * 600;
                   echo "<h1>Total Bill is : $totalbill<h1>";
               }
               else
               {
                    echo "<h1>Please Select Any Category<h1>";
               }

            }

            //Gold

            else if($category == "gold")
            {
               if($movie == "maulajutt")
               {
                   $totalbill = $quantity * 600;
                   echo "<h1>Total Bill is : $totalbill<h1>";
               }
               else if($movie == "warr")
               {
                   $totalbill = $quantity * 500;
                   echo "<h1>Total Bill is : $totalbill<h1>";
               }
               else if($movie == "joker")
               {
                   $totalbill = $quantity * 700;
                   echo "<h1>Total Bill is : $totalbill<h1>";
               }
               else
               {
                    echo "<h1>Please Select Any Category<h1>";
               }

            }

            //Platinium

            else if($category == "pla")
            {
               if($movie == "maulajutt")
               {
                   $totalbill = $quantity * 700;
                   echo "<h1>Total Bill is : $totalbill<h1>";
               }
               else if($movie == "warr")
               {
                   $totalbill = $quantity * 600;
                   echo "<h1>Total Bill is : $totalbill<h1>";
               }
               else if($movie == "joker")
               {
                   $totalbill = $quantity * 800;
                   echo "<h1>Total Bill is : $totalbill<h1>";
               }
               else
               {
                    echo "<h1>Please Select Any Category<h1>";
               }

            }

            

            

        }
    ?>