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

        $encodeString =  convert_uuencode($str) . "<br>";
        echo $encodeString;

        $decodeString = convert_uudecode($encodeString);
        echo $decodeString;
    ?>
</body>
</html>