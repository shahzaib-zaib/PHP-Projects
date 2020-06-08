<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        echo(rand() . "<br>");
        echo(rand() . "<br>");
        echo(rand(0, 10) . "<br>");
        echo(rand(0, 100) . "<br>");





        echo(mt_rand() . "<br>");
        echo(mt_rand() . "<br>");
        echo(mt_rand(0, 10) . "<br>");
        echo(mt_rand(0, 100) . "<br>");





        echo(lcg_value() . "<br>"); // 0 to 1





    ?>
</body>
</html>