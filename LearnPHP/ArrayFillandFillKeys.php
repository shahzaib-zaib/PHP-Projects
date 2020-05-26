<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $a = array("a", "b", "c", "d", "e");

        $newarray = array_fill_keys($a, "Testing");

        echo "<pre>";
        print_r($newarray);
        echo "</pre>";





        $newarray = array_fill(5, 20, "Testing");

        echo "<pre>";
        print_r($newarray);
        echo "</pre>";

    ?>
</body>
</html>