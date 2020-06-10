<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Page</title>
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post"> // Show data for next page use page name
        <label for="">Enter Your Name : </label>
        <input type="text" name="username">

        <br><br>

        <label for="">Enter Your Email : </label>
        <input type="email" name="useremail">

        <br><br>

        <label for="">Enter Your Password : </label>
        <input type="password" name="password">

        <br><br>

        <input type="submit" value="Sign up" name="submitbtn">
    </form>

    <?php

        if(isset($_POST['submitbtn'])){
            echo $_POST['username'] . "<br>";
            echo $_POST['useremail'] . "<br>";
        }
    
    ?>
</body>
</html>