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

        date_add($date, date_interval_create_from_date_string("30 days"));

        echo date_format($date, "d-m-Y"); // 14-06-2015




        $date1 = date_create("2015-05-15");

        date_sub($date1, date_interval_create_from_date_string("10 days"));

        echo date_format($date1, "d-m-Y"); // 05-05-2015




        $date2 = date_create("2015-05-15");

        date_modify($date2, "10 days");

        echo date_format($date2, "d-m-Y"); // 25-05-2015




        $date2 = date_create("2015-05-15");

        date_modify($date2, "-10 days");

        echo date_format($date2, "d-m-Y"); // 05-05-2015

    ?>
</body>
</html>