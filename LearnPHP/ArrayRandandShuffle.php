<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $color = array("Red", "Green", "Blue", "Orange", "Brown");

        $newarray = array_rand($color, 3);

        echo "<pre>";
        print_r($newarray);
        echo "</pre>";

        echo $color[$newarray[0]] . "<br>";
        echo $color[$newarray[1]] . "<br>";
        echo $color[$newarray[2]] . "<br>";




        $color = array("a" => "Red", "b" => "Green", "c" => "Blue", "d" => "Orange", "e" => "Brown");

        $newarray = array_rand($color, 3);

        echo "<pre>";
        print_r($newarray);
        echo "</pre>";





        $color = array("Red", "Green", "Blue", "Orange", "Brown");

        shuffle($color);

        echo "<pre>";
        print_r($color);
        echo "</pre>";




        $color = array("a" => "Red", "b" => "Green", "c" => "Blue", "d" => "Orange", "e" => "Brown");

        shuffle($color);

        echo "<pre>";
        print_r($color);
        echo "</pre>";

    ?>
</body>
</html>