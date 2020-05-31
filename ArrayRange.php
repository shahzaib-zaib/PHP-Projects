<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $newarray = range(1, 100, 10);

        echo "<pre>";
        print_r($newarray);
        echo "</pre>";





        $newarray = range('a', 'z');

        echo "<pre>";
        print_r($newarray);
        echo "</pre>";




        foreach (range('a', 'z') as $letter) {
            echo $letter . "<br>";
        }
    ?>
</body>
</html>