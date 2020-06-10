<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $date = date_create("2015-05-15");

        date_time_set($date, 13, 20);

        echo date_format($date, "d-m-Y H:i:s") . "<br>";


        
        date_time_set($date, 05, 20, 45);
        echo date_format($date, "d-m-Y H:i:s") . "<br>";

    ?>
</body>
</html>