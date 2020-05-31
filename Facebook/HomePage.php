<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
</head>
<body>
<?php

    session_start();
        if (isset($_SESSION['name'])) {
            if ((time() - $_SESSION['logintime']) > 60) {
                header('location:Logout.php');
            }
            else
            {
                echo "<h1>Welcome : " . $_SESSION['name'] . "</h1>";
            }
        }
        else
        {
            header('location:Loginpage.php');
        }
    ?>
</body>
</html>