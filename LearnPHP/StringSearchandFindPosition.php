<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $str = "Hello world. The world is nice";

        echo "Strpos : " . strpos($str, "world") . "<br>"; // 6
        echo "Strpos : " . strpos($str, "world", 10) . "<br>"; // 17
        echo "Strrpos : " . strrpos($str, "world") . "<br>"; // 17
        echo "Stripos : " . stripos($str, "world", 10) . "<br>"; // 6
        echo "Strripos : " . strripos($str, "world") . "<br>"; // 17




    ?>
</body>
</html>