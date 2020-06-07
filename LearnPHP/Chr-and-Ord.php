<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $str = chr(65); //A
        echo $str;

        $strr = chr(97); //a
        echo $strr;

        $strrr = chr(0120); //P
        echo $strrr;

        $strrrr = chr(0x48); //H
        echo $strrrr;






        $str1 = ord("A"); //65
        echo $str1;

        $str2 = ord("a"); //97
        echo $str2;


    ?>
</body>
</html>