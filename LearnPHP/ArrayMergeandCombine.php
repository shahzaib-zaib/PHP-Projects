<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        //============ Index Array Merge ============

        $fruit = ["orange", "banana", "grapes"];
        $veggie = ['carrot', 'pea'];
        $color = ['red', 'blue'];

        $newArray = array_merge($fruit, $veggie, $color);

        echo "<pre>";
        print_r($newArray);
        echo "</pre>";




        //============ Associative Array Merge ============

        $fruit = ['a' => "orange", 'b' =>  "banana", 'c' => "grapes"];
        $veggie = ['d' => 'carrot', 'e' => 'pea', 55, 80];

        $newArray = array_merge($fruit, $veggie);

        echo "<pre>";
        print_r($newArray);
        echo "</pre>";



        $fruit = ['a' => "orange", 'b' =>  "banana", 'c' => "grapes"];
        $veggie = ['b' => 'carrot', 'e' => 'pea', 55, 80];

        //$newArray = array_merge($fruit, $veggie);

        $newArray = $fruit + $veggie;
        echo "<pre>";
        print_r($newArray);
        echo "</pre>";


        //============ Array Merge Recursive ============

        $fruit = ['a' => "orange", 'b' =>  "banana", 'c' => "grapes"];
        $veggie = ['b' => 'carrot', 'e' => 'pea', 55, 80];

        $newArray = array_merge_recursive($fruit, $veggie);

        echo "<pre>";
        print_r($newArray);
        echo "</pre>";




        $fruit = ['a' => "orange", 'b' =>  "banana", 'c' => "grapes"];
        $veggie = ['b' => ['color' => ['red', 'blue', 'green']],
                    'e' => 'pea', 
                    55, 
                    80
                ];

        $newArray = array_merge_recursive($fruit, $veggie);

        echo "<pre>";
        print_r($newArray);
        echo "</pre>";




        //============ Array Combine ============

        $name = array("Shahzaib", "Faizan", "Salman");
        $age = array("35", "37", "43");

        $newArray = array_combine($name, $age);

        echo "<pre>";
        print_r($newArray);
        echo "</pre>";

    ?>
</body>
</html>