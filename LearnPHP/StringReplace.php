<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $str = "Hello world. The world is nice";

        echo str_replace("world", "earth", $str);
        echo str_replace("world", "", $str);




        $str = "Hello world. The world is nice";

        $find = ["Hello", "world"];
        $replace = ["Hi", "earth"]
        echo str_replace($find, $replace, $str);






        $str = "Hello world. The world is nice";

        $find = ["Hello", "WORLD"];
        $replace = ["Hi", "earth"]
        echo str_rreplace($find, $replace, $str);






        $color = ["blue", "red", "green", "yellow"];

        echo "<pre>";
        print_r(str_replace("red", "pink", $color));
        echo "</pre>";






        $str = "Hello world. The world is nice";

        echo substr_replace($str, "earth", 6); // Hello earth
        echo substr_replace($str, "earth", 6, 10); // Hello earth world is nice
        echo substr_replace($str, "earth", 6, -5); // Hello earth nice
        echo substr_replace($str, "earth", 0, 0); // earthHello world. The world is nice
        echo strtr($str, "earth", "eo", "ia"); // Hilla warld. Thi warld is nici




        $str = "Hello world. The world is nice";

        $array = ["Hello" => "Hi", "WORLD" => "earth"];

        echo str_rreplace($find, $array); // Hi earth. The earth is nice

    ?>
</body>
</html>