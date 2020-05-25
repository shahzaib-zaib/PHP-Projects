<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $color = array("a" => "red", "b" => "green", "c" => "blue", "d" => "yellow");

        $newArray = array_values($color);

        echo "<pre>";
        print_r($newArray);
        echo "</pre>";




        $color = array("a" => "red", "b" => "green", "c" => "blue", "d" => "yellow", "a" => "red", "c" => "blue");

        $newArray = array_unique($color);

        echo "<pre>";
        print_r($newArray);
        echo "</pre>";


    ?>
</body>
</html>