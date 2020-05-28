<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //$food = ['Orange', 'Banana', 'Grapes', 'Apple'];
        $food = [22,15,3,65];

        //sort($food);
        rsort($food);

        echo "<pre>";
        print_r($food);
        echo "</pre>";





        $food = array(
            "d" =>"Orange", 
            "a" => "Banana", 
            "b" => "Grapes", 
            "c" => "Apple"
        );

        //asort($food);
        //arsort($food);
        //ksort($food);
        krsort($food);


        echo "<pre>";
        print_r($food);
        echo "</pre>";





        $food = array('Orange', 'Banana');
        $veggie = array('lemon', 'carrot');

        array_multisort($food);
        array_multisort($veggie);


        echo "<pre>";
        print_r($food);
        echo "</pre>";

        echo "<pre>";
        print_r($veggie);
        echo "</pre>";







        $food = array('Orange', 'Banana', 'Grapes', 'Apple');

        $newarray = array_reverse($food);


        echo "<pre>";
        print_r($newarray);
        echo "</pre>";
    ?>
</body>
</html>