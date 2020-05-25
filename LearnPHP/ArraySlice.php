<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $color = ["red", "green", "blue", "yellow", "brown"];

        //$newarray = array_slice($color, 1, 3);
        //$newarray = array_slice($color, -2, 1);
        $newarray = array_slice($color, -2, 1, true);

        echo "<pre>";
        print_r($newarray);
        echo "</pre>";



        $color = ['a' => "red", 'b' => "green", '42' => "blue", 'd' => "yellow"];

        //$newarray = array_slice($color, 1, 3);
        $newarray = array_slice($color, 1, 3, true);


        echo "<pre>";
        print_r($newarray);
        echo "</pre>";




        $color = ['0' => "red", '1' => "green", '2' => "blue", '3' => "yellow", '4' => "brown"];

        $newarray = array_slice($color, 1, 3);


        echo "<pre>";
        print_r($newarray);
        echo "</pre>";


    ?>
</body>
</html>