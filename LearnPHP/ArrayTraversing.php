<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $food = array('lemon', 'orange', 'banana', 'apple', 'guava');

        echo "<b> Current : </b>" . current($food) . "<br>";
        echo "<b> Key : </b>" . key($food) . "<br>";
        echo "<b> Pos : </b>" . pos($food) . "<br>";

        next($food);
        echo "<b> Current : </b>" . Current($food) . "<br>";

        next($food);
        echo "<b> Current : </b>" . Current($food) . "<br>";

        prev($food);
        echo "<b> Current : </b>" . Current($food) . "<br>";

        end($food);
        echo "<b> Current : </b>" . Current($food) . "<br>";
        echo "<b> Key : </b>" . key($food) . "<br>";

        echo "<pre>";
        print_r(each($food));
        echo "<b> Current : </b>" . Current($food) . "<br>";
        echo "</pre>";


        reset($food);
        echo "<b> Current : </b>" . Current($food) . "<br>";

        


    ?>
</body>
</html>