<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $str = bin2hex("Hello World");
        $strr = bin2hex("Hello World Hello Earth");
        echo $str;
        echo $strr;

        echo hex2bin($str);
        echo hex2bin($strr);




    ?>
</body>
</html>