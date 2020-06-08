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
        echo "Time & Date : " . date("d-m-Y h:i:sa") . "<br><br>";


        echo date("l", mktime(0, 0, 0, 10, 15, 2003)) . "<br><br>"; // Wednesday
        echo date("d-m-Y h:i:sa", mktime(0, 0, 0, 10, 15, 2003)) . "<br><br>"; // 15-10-2003 12:00:00am

        echo date("d-m-Y h:i:sa", gmmktime(0, 0, 0, 10, 15, 2003)) . "<br><br>"; // 15-10-2003 12:00:00am



    ?>
</body>
</html>