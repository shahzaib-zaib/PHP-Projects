<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        date_default_timezone_set("Asia/Karachi");
        echo date_default_timezone_get() . "<br>";


        $tz = timezone_open("Asia/Karachi");
        echo timezone_name_get($tz) . "<br>";


        echo "<pre>";
        print_r(timezone_location_get($tz)) . "<br>";
        echo "</pre>";


        echo "<pre>";
        print_r(timezone_identifiers_list()) . "<br>";
        echo "</pre>";


        echo "<pre>";
        print_r(timezone_identifiers_list(2)) . "<br>";
        echo "</pre>";
        
    ?>
</body>
</html>