<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $date = date_create("2023-03-15 22:25:00");

        echo date_format($date, "l"); // Wednesday

        echo date_format($date, "d/m/Y H:i:s"); // 15/03/2023 22:25:00



        $date = date_create("2023-03-15 22:25:00", timezone_open("Asia/Karachi"));

        echo date_format($date, "d/m/Y H:i:s"); // 15/03/2023 22:25:00

    ?>
</body>
</html>