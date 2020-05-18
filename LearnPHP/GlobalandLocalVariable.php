<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $x = 10;
        function test(){
            //$x = 10;
            global $x;
            echo "Variable X inside function : $x <br>";
        }
        text();
        echo "Variable X outside function : $x";



        $x = 10;
        $y = 5;
        
        function test(){
            global $x , $y;
            $x = $x + $y;
        }
        text();
        echo $x;

    ?>
</body>
</html>