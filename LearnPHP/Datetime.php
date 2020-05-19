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






    ?>
</body>
</html>