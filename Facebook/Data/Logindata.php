<?php

    session_start();
    if (isset($_GET['btn'])) {
        $username = $_GET['Shahzaib']
        $email = $_GET['email'];
        $pass = $_GET['password'];
        if ($email == 'shahzaib@gmail.com' && $pass == '123456') {
            $_SESSION['name'] = $username;
            $_SESSION['logintime'] = time();
            header('location:HomePage.php');
        }
        else
            {
                echo "<h3 style='color:red;'>Invalid Credentials</h3>";
            }
    }

?>