<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        echo "1. Some Message <br>";
        echo "2. Some Message <br>";
        echo "3. Some Message <br>";
        die("Here is some errors!!!"); // After 3 not print
        echo "4. Some Message <br>";
        echo "5. Some Message <br>";





        echo "1. Some Message <br>";
        echo "2. Some Message <br>";
        echo "3. Some Message <br>";
        exit("Here is some errors!!!"); // After 3 not print
        echo "4. Some Message <br>";
        echo "5. Some Message <br>";

    ?>
</body>
</html>