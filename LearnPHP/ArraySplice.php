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

        array_splice($color, 1, -2); // remove green and blue
        array_splice($color, 1, -1); // remove red and brown
        array_splice($color, -1); // remove red and brown
        array_splice($color, 0, 1); // remove red


        echo "<pre>";
        print_r($color);
        echo "</pre>";



        $color = ["red", "green", "blue", "yellow", "brown"];
        $fruit = ["orange", "apple"];

        array_splice($color, 0, 2, $fruit);
        
        echo "<pre>";
        print_r($color);
        echo "</pre>";



        $color = ["red", "green", "blue", "yellow", "brown"];
        $fruit = ["orange", "apple"];

        array_splice($color, 2, count($color), $fruit); // remove all color after 2 and print "Fruit" value
        
        echo "<pre>";
        print_r($color);
        echo "</pre>";



        $color = ["red", "green", "blue", "yellow", "brown"];
        $fruit = ["orange", "apple"];

        array_splice($color, 2, 0, $fruit); // remove only blue color
        
        echo "<pre>";
        print_r($color);
        echo "</pre>";



    ?>
</body>
</html>