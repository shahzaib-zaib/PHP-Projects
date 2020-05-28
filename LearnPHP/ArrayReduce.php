<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        function myFunction($n, $m){
            return $n . "-" . $m;
        }

        $a = ['orange', 'banana', 'apple'];

        $newarray = array_reduce($a, 'myFunction', 'lemon', 20);

        echo "<pre>";
        print_r($newarray);
        echo "</pre>";





        function myFunction($n, $m){
            return $n + $m;
        }

        $a = [1, 2, 3, 4, 5];

        $newarray = array_reduce($a, 'myFunction');

        echo "<pre>";
        print_r($newarray);
        echo "</pre>";

    ?>
</body>
</html>