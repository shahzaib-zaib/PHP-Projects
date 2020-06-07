<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $val = max(22,14,68,18,15);
        echo $val; // 68

        $val2 = min(22,14,68,18,15);
        echo $val2; // 14





        $val3 = min(array(22,14,68,18,15));
        echo $val3; // 14


        $val4 = min(array(2, 4, 8), array(2, 5, 1));
        
        echo "<pre>";
        print_r($val4); // (2, 4, 8)
        echo "</pre>";


        $val5 = max(array(2, 4, 8), array(2, 5, 1));
        
        echo "<pre>";
        print_r($val5); // (2, 5, 1)
        echo "</pre>";




        //           1      0
        $val6 = max(TRUE, FALSE);
        
        echo $val6; // 1



        //           1      0
        $val6 = min(TRUE, FALSE);
        
        echo $val6; // 0
        

    ?>
</body>
</html>