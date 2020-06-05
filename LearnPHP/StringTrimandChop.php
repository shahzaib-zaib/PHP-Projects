<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $str = "Hello World";

        echo $str . "<br>";

        echo trim($str, "d");

        echo rtrim($str, "W");

        echo ltrim($str, "o");


        $str = " Hello World ";

        echo trim($str); // remove extra space
        echo rtrim($str); // remove right space
        echo ltrim($str); // remove left space



        $strr = " Hello World ";

        echo chop($strr, "HWo");

        echo chop($strr);







    ?>
</body>
</html>