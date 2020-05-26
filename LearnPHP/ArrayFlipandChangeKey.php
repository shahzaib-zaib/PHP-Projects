<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $a = array(
            "Bill" => 10,
            "Joe" => 20,
            "Peter" => 30
        );

        $newarray = array_flip($a);

        echo "<pre>";
        print_r($newarray);
        echo "</pre>";





        $a = array(
            "Bill" => 10,
            "Joe" => 20,
            "Peter" => 30
        );

        $newarray = array_change_key_case($a, CASE_UPPER);

        echo "<pre>";
        print_r($newarray);
        echo "</pre>";

    ?>
</body>
</html>