<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $fruits = array(
            "a" => "Lemon",
            "b" => "Orange",
            "c" => "Banana",
            "d" => "Apple"
        );

        array_walk($fruits, "myFunction", "is a key of");

        function myFunction($value, $key, $param){
                echo "$key $param $value <br>";
        }


        $veggie = array("1" => "Carrot", "2" => "Tomatoes");

        $fruits = array(
            $veggie,
            "a" => "Lemon",
            "b" => "Orange",
            "c" => "Banana",
            "d" => "Apple"
        );

        array_walk_recursive($fruits, "myFunction", "is a key of");

        function myFunction($value, $key, $param){
                echo "$key $param $value <br>";
        }





    ?>
</body>
</html>