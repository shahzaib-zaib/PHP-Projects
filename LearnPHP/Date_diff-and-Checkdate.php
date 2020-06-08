<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        echo checkdate(2, 15, 2014); // 1
        echo checkdate(2, 29, 2014); //


        $date1 = date_create("2013-03-15");
        $date2 = date_create("2013-12-12");

        $diff = date_diff($date1, $date2);

        echo $diff->days . "days"; //272

        echo "<pre>";
        print_r($diff);
        echo "</pre>";

    ?>
</body>
</html>