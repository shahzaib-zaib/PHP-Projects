<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        // $a = 3;
        // $b = 10;
        // if ($a < $b) {
        //     echo "A is Smaller";
        // }

        // echo "Here is other statement";

        // $a = 30;
        // $b = 30;
        // if ($a == $b) {
        //     echo "A is Smaller";
        // }

        // echo "Here is other statement";

        // $a = 30;
        // $b = "30";
        // if ($a === $b) {
        //     echo "A is Smaller";
        // }

        // echo "Here is other statement";

        // $a = 30;
        // $b = "30";
        // if ($a == $b):
        //     echo "A is Smaller <br>";
        //     echo "A is Smaller <br>";
        // endif;
        // echo "Here is other statement";

        // $x = 15;

        // if ($s > 30) {
        //     echo "X is Greater.";
        // }else{
        //     echo "X is Smaller.";
        // }

        // $name = "Hello World";
        // $gender = "Male";

        // if ($gender == "Male") {
        //     echo "Hello Mr." . $name;
        // }else{
        //     echo "Hello Miss." . $name;

        // }

        $per = 80;

        if ($per >= 80 && $per <= 100):
            echo "You are in Merit";
        elseif ($per >= 60 && $per <= 80):
            echo "You are in Ist Devision";
        elseif ($per >= 45 && $per <= 60):
            echo "You are in IIst Devision";
        elseif ($per >= 33 && $per <= 45):
            echo "You are in IIIst Devision";
        elseif ($per < 33):
            echo "You are Fail";
        else{
            echo "Please Enter Valid Percentage";
        endif;

    ?>
</body>
</html>