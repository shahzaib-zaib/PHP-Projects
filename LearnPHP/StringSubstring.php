<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $str = "Hello world. The world is nice";

        echo substr($str, 5); // world. The world is nice
        echo substr($str, -10); // ld is nice
        echo substr($str, 0, 10); // Hello worl
        echo substr($str, -10, 3); // ld is n



    ?>
</body>
</html>