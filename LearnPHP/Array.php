<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        //Array
        $colors = array["Red", "Yellow", "Green", "Blue", 20, 20.50];

        // echo $colors[0] . "<br>";
        // echo $colors[1] . "<br>";
        // echo $colors[2] . "<br>";
        // echo $colors[3] . "<br>";
        // echo $colors[4] . "<br>";
        // echo $colors[5] . "<br>";


        echo "<pre>";
        print_r($colors);
        echo "</pre>";

        //Second Approch
        $color[0] = "red";
        $color[1] = "yellow";
        $color[2] = "blue";
        $color[3] = "green";

        echo "<pre>";
        print_r($colors);
        echo "</pre>";



        $colors = array["Red", "Yellow", "Green", "Blue", 20, 20.50];

        echo "<ul>";
        for ($i=0; $i < 4; $i++) { 
            echo "<li> $colors[$i] </li>";
        }
        echo "</ul>";



        //Associative Array

        $age = array[
            "bill" => 25,
            "steve" => 28,
            "elon" => 22
        ];

        $age["elon"] = 50;

        echo "<pre>";
        print_r($age);
        echo "</pre>";

        echo "<pre>";
        var_dump($age);
        echo "</pre>";

        echo $age["bill"] . "<br>";
        echo $age["steve"] . "<br>";
        echo $age["elon"] . "<br>";
        

        $age = array[
            "1" => 25,
            "2" => 28,
            "3" => 22
        ];

        echo "<pre>";
        print_r($age);
        echo "</pre>";

        echo $age["1"] . "<br>";
        echo $age["2"] . "<br>";
        echo $age["3"] . "<br>";



        //Foreach Loop Array

        $colour = [
            "red",
            "green",
            "blue"
        ];

        foreach ($colour as $value) {
            echo $value . "<br>";
        }


        $age = [
            "bill" => 25,
            "steve" => 28,
            "elon" => 22
        ];

        echo "<ul>";
        foreach ($age as $key => $value) {
            echo "<li> $key = $value </li>";
        }
        echo "</ul>";



        //Multidimensional Array

        $emp = [
            [1,"Shahzaib","Director","300000"],
            [2,"Salman","Salesman","20000"],
            [3,"Mohan","Computer Operator","12000"],
            [4,"Amir","Driver","5000"],
        ];

        echo $emp[0][0] . " ";
        echo $emp[0][1] . " ";
        echo $emp[0][2] . " ";
        echo $emp[0][3] . " ";
        echo "<br>";
        echo $emp[1][0] . " ";
        echo $emp[1][1] . " ";
        echo $emp[1][2] . " ";
        echo $emp[1][3] . " ";


        echo "<pre>";
        print_r($emp);
        echo "</pre>";


        $emp = [
            [1,"Shahzaib","Director","300000"],
            [2,"Salman","Salesman","20000"],
            [3,"Mohan","Computer Operator","12000"],
            [4,"Amir","Driver","5000"],
        ];

       for ($row=0; $row < 4; $row++) { 
           for ($col=0; $col < 4; $col++) { 
               echo $emp[$row][$col] . " ";
           }
           echo "<br>";
       }


       $emp = [
        [1,"Shahzaib","Director","300000"],
        [2,"Salman","Salesman","20000"],
        [3,"Mohan","Computer Operator","12000"],
        [4,"Amir","Driver","5000"],
    ];

    echo "<table border= '2px' cellpadding='5px' cellspacing='0'>";
    echo "<tr>
            <th>Emp Id</th>
            <th>Emp Name</th>
            <th>Emp Designation</th>
            <th>Emp Salary</th>

        </tr>";
   foreach ($emp as $v1) {
       echo "<tr>";
    foreach ($v1 as $v2) {
        echo "<td> $v2 </td>";
    }
    echo "<tr>";
   }
   echo "</table>";

    ?>
</body>
</html>