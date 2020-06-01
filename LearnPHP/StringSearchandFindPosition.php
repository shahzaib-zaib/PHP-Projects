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
        echo "Stripos : " . stripos($str, "world") . "<br>"; // 6
        echo "Strripos : " . strripos($str, "world") . "<br>"; // 17





        $str = "Hello world. The world is nice";

        echo "Strstr : " . strstr($str, "world") . "<br>"; // world. The world is nice
        echo "Strstr : " . strstr($str, "world", true) . "<br>"; // Hello
        echo "Stristr : " . stristr($str, "WORLD") . "<br>"; // world. The world is nice    Case-insenctive
        echo "strchr : " . strchr($str, "world") . "<br>"; // world. The world is nice
        echo "strchr : " . strchr($str, "world", true) . "<br>"; // Hello
        echo "strrchr : " . strrchr($str, "world") . "<br>"; // world is nice
        echo "strpbrk : " . strpbrk($str, "e") . "<br>"; // ello world. The world is nice
        echo "strpbrk : " . strpbrk($str, "wo") . "<br>"; // o world. The world is nice












    ?>
</body>
</html>