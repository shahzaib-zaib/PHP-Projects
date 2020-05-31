<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $color = array('a' => 'red', 'b' => 'green', 'c' => 'blue');

        extract($color);

        echo "Value of a : $a <br>";
        echo "Value of b : $b <br>";
        echo "Value of c : $c <br>";




        $color = array('a' => 'red', 'b' => 'green', 'c' => 'blue');

        extract($color, EXTR_OVERWRITE);

        echo "Value of a : $a <br>";
        echo "Value of b : $b <br>";
        echo "Value of c : $c <br>";




        $a = "orange";
        $color = array('a' => 'red', 'b' => 'green', 'c' => 'blue');

        extract($color, EXTR_SKIP);

        echo "Value of a : $a <br>";
        echo "Value of b : $b <br>";
        echo "Value of c : $c <br>";




        $a = "orange";
        $color = array('a' => 'red', 'b' => 'green', 'c' => 'blue');

        extract($color, EXTR_PREFIX_SAME, "test");

        echo "Value of a : $a <br>";
        echo "Value of a : $test_a <br>";
        echo "Value of b : $b <br>";
        echo "Value of c : $c <br>";





        $a = "orange";
        $color = array('a' => 'red', 'b' => 'green', 'c' => 'blue');

        extract($color, EXTR_PREFIX_ALL, "test");

        echo "Value of a : $a <br>";
        echo "Value of a : $test_a <br>";
        echo "Value of b : $test_b <br>";
        echo "Value of c : $test_c <br>";




        $firstname = "Hello";
        $lastname = "World";
        $age = "20";
        $gender = "Male";
        $country = "Pakistan";

        $extra = ["gender", "country"];
        $newarray = compact("firstname", "lastname", "age", $extra);

        echo "<pre>";
        print_r($newarray);
        echo "</pre>";

    ?>
</body>
</html>