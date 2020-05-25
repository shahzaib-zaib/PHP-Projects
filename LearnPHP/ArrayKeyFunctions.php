<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php

        $color = ["red", "green", "blue", "yellow"];

        $newarray = array_keys($color);

        echo "<pre>";
        print_r($newarray);
        echo "</pre>";




        $colors = [
            "first" => "red",
            "second" => "green",
            "third" => "blue",
            "fourth" => "yellow"
        ];

        $newarray = array_keys($colors);

        echo "<pre>";
        print_r($newarray);
        echo "</pre>";




        $colors = [
            "first" => "red",
            "second" => "green",
            "third" => "blue",
            "fourth" => "yellow"
        ];

        $newarray = array_key_first($colors); //return first key
        $newarray = array_key_last($colors); // return last key
        $newarray = array_key_exists("third", $colors); // return available key to given perameter
        $newarray = key_exists("third", $colors); // same as second last

        echo "<pre>";
        print_r($newarray);
        echo "</pre>";




        $colors = [
            "first" => "red",
            "second" => "green",
            "third" => "blue",
            "fourth" => "yellow"
        ];

        $newarray = key_exists("second", $colors);

        if ($newarray) {
            echo "Key exists!";
        }else{
            echo "Key does not exists!";
        }

    ?>

</body>
</html>