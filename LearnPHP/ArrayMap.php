<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        function square($n, $m){
            //return "$n for $m";
            return [$n => $m];
        }

        $a = [1,2,3,4,5];
        $b = ['lemon', 'orange', 'banana', 'apple', 'guava'];

        $newArray = array_map('square', $a, $b);

        echo "<pre>";
        print_r($newArray);
        echo "</pre>";






        function square($n){
            return strtoupper($n);
        }

        $a = array("one" => "Apple", "two" => "Banana", "three" => "Orange");

        $newArray = array_map('square', $a);

        echo "<pre>";
        print_r($newArray);
        echo "</pre>";
    ?>
</body>
</html>