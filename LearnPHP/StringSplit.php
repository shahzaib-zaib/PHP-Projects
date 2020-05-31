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

        $array = str_split($str, 2);

        echo "<pre>";
        print_r($array)
        echo "</pre>";




        $str = "Hello World";

        $newStr = Chunk_split($str, 1, "...");

        echo($newStr)

    ?>
</body>
</html>