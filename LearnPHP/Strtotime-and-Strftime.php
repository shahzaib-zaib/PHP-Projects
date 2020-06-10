<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        
        echo date("d-m-Y", strtotime("now")) . "<br>";

        echo date("d-m-Y", strtotime("3 march 2005")) . "<br>";

        echo date("d-m-Y H:m", strtotime("+5 hours")) . "<br>";

        echo date("d-m-Y H:m", strtotime("+1 week")) . "<br>";

        echo date("d-m-Y H:m", strtotime("+1 week 3 days 7 hours 5 seconds")) . "<br>";

        echo date("d-m-Y H:m", strtotime("next Monday")) . "<br>";

        echo date("d-m-Y H:m", strtotime("last sonday")) . "<br>";

        echo date("d-m-Y H:m", strtotime("First day of last month")) . "<br>";









        echo strftime("%B %d %Y, %X %Z") . "<br>";

        echo strftime("%B %d %Y, %X %Z", mktime(21,30,0,05,18,2005)) . "<br>";

        echo strftime("%d/%m/%Y %H:%M:%S", mktime(21,30,0,05,18,2005)) . "<br>";

        echo gmstrftime("%d/%m/%Y %H:%M:%S", mktime(21,30,0,05,18,2005)) . "<br>";

        










    ?>
</body>
</html>