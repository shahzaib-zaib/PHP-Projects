<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <h4>Enter Your Username</h4>
        <input type="text" name="name">
        <h4>Enter Your Password</h4>
        <input type="password" name="pswd">

        <input type="submit" name="loginbtn" value="Login">
    </form>
    <?php

        $connection = mysqli_connect('localhost:3308', 'root', '', 'form');

        session_start();

        if (isset($_POST['loginbtn'])) {
            $a = $_POST['name'];
            $b = $_POST['pswd'];
            $checkdb = "select * from logintable where Username = '$a' and Password = '$b'";
            $execute = mysqli_query($connection, $checkdb);
            $found = mysqli_num_rows($execute);
            if ($found == 1) {
                $datauthao = mysqli_fetch_assoc($execute);
                $_SESSION['role'] = $datauthao['Role'];
                if ($_SESSION['role'] == "Admin") {
                    header('location:Contact.php');
                } else {
                    header('location:About.php');
                }
                
            } else {
                echo "Invalid Credentials";
            }
        }
    ?>
</body>
</html>