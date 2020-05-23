<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <?php

        session_start();

        if (isset($_SESSION['name'])) {
            echo "<h1>Welcome : " . $_SESSION['name'] . "</h1>";
        }
        else
        {
            header('location:LoginPage.php');
        }
    ?>

    <br>
    <a href="Third.php">Third Page</a>
</body>
</html>