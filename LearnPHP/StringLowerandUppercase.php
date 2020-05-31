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
        $newStr = strtolower($str);
        echo $newStr;


        $str = "Hello World";
        $newStr = strtoupper($str);
        echo $newStr;


        $str = "Hello World";
        $newStr = lcfirst($str);
        echo $newStr;



        $str = "hello World";
        $newStr = ucfirst($str);
        echo $newStr;



        $str = "hello world";
        $newStr = ucwords($str);
        echo $newStr;

    ?>
</body>
</html>