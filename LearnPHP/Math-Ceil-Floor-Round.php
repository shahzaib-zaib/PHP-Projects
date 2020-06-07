<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        #==================== Math Ceil ====================#

        echo(ceil(0.60) . "<br>"); // 1
        echo(ceil(0.40) . "<br>"); // 1
        echo(ceil(5) . "<br>"); // 5
        echo(ceil(5.1) . "<br>"); // 6
        echo(ceil(-5.1) . "<br>"); // -5



        #==================== Math Floor ====================#

        echo(floor(0.60) . "<br>"); // 0
        echo(floor(0.40) . "<br>"); // 0
        echo(floor(5) . "<br>"); // 5
        echo(floor(5.1) . "<br>"); // 5
        echo(floor(-5.1) . "<br>"); // -6



        #==================== Math Round ====================#

        echo(round(0.60) . "<br>"); // 1
        echo(round(0.40) . "<br>"); // 0
        echo(round(5) . "<br>"); // 5
        echo(round(5.1) . "<br>"); // 5
        echo(round(-5.1) . "<br>"); // -5




        #==================== Math ABS ====================#

        echo(abs(0.60) . "<br>"); // 0.6
        echo(abs(0.40) . "<br>"); // 0.5
        echo(abs(5) . "<br>"); // 5
        echo(abs(5.1) . "<br>"); // 5.1
        echo(abs(-5.1) . "<br>"); // 5.1





    ?>
</body>
</html>