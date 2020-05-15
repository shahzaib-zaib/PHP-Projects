<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        //While Loop

        $a = 1;

        while ($a <= 10) {
            echo $a . ") Hello World <br>";

            //$a = $a + 1;
            $a++;
        }

        echo "<ul>";
        $a = 10;
        while ($a >= 1) {
            echo "<li>" $a . ") Hello World </li>";

            //$a = $a - 1;
            $a--;
        }

        echo "</ul>";




        //Do While Loop

        $a = 1;

        do {
            echo $a . ") Hello World <br>";
            //$a = $a - 1;
            $a++;
        } while ($a <= 10);



        //For Loop

        for ($i=1; $i <= 10; $i++) { 
            echo $i . ") Hello World <br>";
        }


        //Nested Loop

        for ($a = 1; $a <= 100; $a + 10) { 
            for ($b = $a; $b < $a + 10; $b++) { 
                echo $b . " ";
            }
            echo "<br>";
        }

    ?>
</body>
</html>