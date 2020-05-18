<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        //Array
        $colors = array["Red", "Yellow", "Green", "Blue", 20, 20.50];

        // echo $colors[0] . "<br>";
        // echo $colors[1] . "<br>";
        // echo $colors[2] . "<br>";
        // echo $colors[3] . "<br>";
        // echo $colors[4] . "<br>";
        // echo $colors[5] . "<br>";


        echo "<pre>";
        print_r($colors);
        echo "</pre>";

        //Second Approch
        $color[0] = "red";
        $color[1] = "yellow";
        $color[2] = "blue";
        $color[3] = "green";

        echo "<pre>";
        print_r($colors);
        echo "</pre>";



        $colors = array["Red", "Yellow", "Green", "Blue", 20, 20.50];

        echo "<ul>";
        for ($i=0; $i < 4; $i++) { 
            echo "<li> $colors[$i] </li>";
        }
        echo "</ul>";


    ?>
</body>
</html>