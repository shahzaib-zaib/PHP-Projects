<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $date = getdate();
        echo $date['month'] . " - " . $date['year'];

        echo "<pre>";
        print_r(getdate());
        echo "</pre>";





        $olddate = mktime(0,0,0,03,15,2015);
        $date1 = getdate($olddate);
        echo $date1['month'] . " - " . $date1['year'];

        echo "<pre>";
        print_r(getdate($olddate));
        echo "</pre>";






        echo "<pre>";
        print_r(gettimeofday());
        echo "</pre>";

        $date2 = gettimeofday();
        echo $date2['sec'];






        echo "<pre>";
        print_r(localtime(time(),true));
        echo "</pre>";



        $olddate1 = mktime(0,0,0,03,15,2015);
        echo "<pre>";
        print_r(localtime($olddate1(),true));
        echo "</pre>";

    ?>
</body>
</html>