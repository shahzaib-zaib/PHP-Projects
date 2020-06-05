<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $str = "Hello World";

        echo str_pad($str, 20, ".");
        echo str_pad($str, 20, "+");
        echo str_pad($str, 20, "+=");
        echo str_pad($str, 20, ".", STR_PAD_LEFT);
        echo str_pad($str, 20, ".", STR_PAD_BOTH);
        echo str_pad($str, 20, ".", STR_PAD_RIGHT); //default


        $strr = "Wow";
        echo str_repeat($strr, 5); // repeat 5





    ?>
</body>
</html>