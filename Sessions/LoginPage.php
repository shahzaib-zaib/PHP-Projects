<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <label for="">Username</label>
        <input type="text" name="username">

        <br><br>

        <label for="">Password</label>
        <input type="text" name="password">

        <br><br>

        <input type="submit" value="Login" name="btn" id="">
    </form>

    <?php

        session_start();

        if (isset($_GET['btn'])) {
            $a = $_GET['username'];
            $b = $_GET['password'];
            if ($a == "Admin" && $b == "123") {
                $_SESSION['name'] = $a;
                header('location:WelcomePage.php');
            }
            else
            {
                echo "<h3 style='color:red;'>Invalid Credentials</h3>";
            }
        }

    ?>
</body>
</html>