<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        //================== Date ================//

        // d => date(numeric)
        // D => day (words/short)
        // l => day 
        // m => month (numeric)
        // M => month name
        // y => two digit for year 20
        // Y => year four digit 2020

        // 5 / 19 / 2020 
        echo date('m / d / Y');

        // 5 May 20 , Tue
        echo date('m M y , D');

        // 19 May Tuesday , 2020
        echo data('d M l , Y');

        // 5 - 19 : Tuesday , May 2020
        echo data('m - d : l , M Y');


        echo "Today is " . date("d") . "<br>"; // 12
        echo "Today is " . date("jS") . "<br>"; // 12th

        echo "Month is " . date("F") . "<br>"; // September
        echo "Month is " . date("m") . "<br>"; // 09
        echo "Month is " . date("n") . "<br>"; // 9
        echo "Month is " . date("M") . "<br>"; // Sep

        echo "Year is " . date("Y") . "<br>"; // 2020
        echo "Year is " . date("y") . "<br>"; // 20

        echo "Full Date is " . date("d/m/Y") . "<br>"; // 12/09/2020
        echo "Full Date is " . date("Y-m-d") . "<br>"; // 2020-09-12
        echo "Full Date is " . date("Y-M-d") . "<br>"; // 2020-Sep-12

        echo "Week Day is " . date("D") . "<br>"; // Thu
        echo "Week Day is " . date("l") . "<br>"; // Thursday
        echo "Week Day is " . date("N") . "<br>"; // 4
        echo "Week Day is " . date("w") . "<br>"; // 4

        echo "Day is " . date("z") . "<br>"; // 254
        echo "Week of the year" . date("W") . "<br>"; // 37
        echo "Days of the month" . date("t") . "<br>"; // 30

        echo "Is this is leap year" . date("L") . "<br>"; // 0 or 1









        //================== Time ================//

        // a => am/pm
        // A => AM/PM
        // h => 12 hours
        // H => 24 hours
        // i => minute
        // s => seconds

        date_default_timezone_set('Asia/Karachi');
        echo data('h : i a');

        echo data('H : i : s A');

        // 5 - 19 May , Tue 2020 - 11 : 16 pm
        echo data('m - d M , D Y - h : i a');


        echo "Hour is" . date("h") . "<br>"; // 02
        echo "Hour is" . date("H") . "<br>"; // 00
        echo "Hour is" . date("g") . "<br>"; // 2
        echo "Hour is" . date("G") . "<br>"; // 0


        echo "Minutes is" . date("i") . "<br>"; // 27

        echo "Seconds is" . date("s") . "<br>"; // 59
        
        echo "Meridiem is" . date("a") . "<br>"; // am
        echo "Meridiem is" . date("A") . "<br>"; // AM

        echo "Time is" . date("h:i:sa") . "<br>"; // 12:55:20am

        echo "Time & Date is" . date("d-m-Y h:i:sa") . "<br>"; // 16-09-2020 12:55:20am

        echo "Time & Date is" . date("d-m-Y h:i:sa e") . "<br>"; // 16-09-2020 12:55:20am  // Asia/Karachi







        






    ?>
</body>
</html>