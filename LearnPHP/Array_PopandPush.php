<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $fruit = ["orange", "banana", "apple", "grapes"];

        array_pop($fruit);

        echo "<pre>";
        print_r($fruit);
        echo "</pre>";

        $fruit = ["orange", "banana", "apple", "grapes"];

        array_push($fruit, "guava", "lemon", "stroberry");

        echo "<pre>";
        print_r($fruit);
        echo "</pre>";

    ?>
</body>
</html>