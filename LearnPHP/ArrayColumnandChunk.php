<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $array = array(
            array(
                'id' => 2201,
                'first_name' => 'Shahzaib',
                'last_name' => 'Zaib'
            ),
            array(
                'id' => 2202,
                'first_name' => 'Salman',
                'last_name' => 'Khan'
            ),
            array(
                'id' => 2203,
                'first_name' => 'John',
                'last_name' => 'Abraham'
            )
        );

        $newarray = array_column($array, 'first_name');

        echo "<pre>";
        print_r($newarray);
        echo "</pre>";







        $array = array(
            array(
                'id' => 2201,
                'first_name' => 'Shahzaib',
                'last_name' => 'Zaib'
            ),
            array(
                'id' => 2202,
                'first_name' => 'Salman',
                'last_name' => 'Khan'
            ),
            array(
                'id' => 2203,
                'first_name' => 'John',
                'last_name' => 'Abraham'
            )
        );

        $newarray = array_column($array, 'first_name', 'id');

        echo "<pre>";
        print_r($newarray);
        echo "</pre>";





        $cars = ["Volvo", "BMW", "Toyota", "Honda", "Mercedes", "Opel"];

        $newarray = array_chunk($cars, 3);

        echo "<pre>";
        print_r($newarray);
        echo "</pre>";






        $age = array(
            "Mohan" => "35",
            "Aman" => "37",
            "Adnan" => "43",
            "Salman" => "25"
        );

        $newarray = array_chunk($age, 3, true); // priserve vlaue show key value

        echo "<pre>";
        print_r($newarray);
        echo "</pre>";

    ?>
</body>
</html>