<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php

        $fruit = ["orange", "banana", "grapes"];

        array_shift($fruit);

        echo "<pre>";
        print_r($fruit);
        echo "</pre>";

        $fruit = ["orange", "banana", "grapes"];

        array_unshift($fruit,"apple", "banana", "lemon");

        echo "<pre>";
        print_r($fruit);
        echo "</pre>";




    ?>
</body>
</html>