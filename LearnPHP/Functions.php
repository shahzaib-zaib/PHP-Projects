<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        //Function
        function hello(){
            echo "Hello Everybody.<br>";
        }

        function world(){
            echo "Hello Shahzaib.<br>";
        }

        hello();
        hello();
        echo "Hey this is an example.<br>";
        hello();
        hello();
        world();


        //Function with parameters
        function hello($fname="First",$lname="Last"){
            echo "Hello $name $lname.<br>";
        }

        function sum($a, $b){
            echo $a + $b;
        }

        hello("Shahzaib" , "Zaib");
        hello("Hello" , "World");

        sum(10,20.55);

        function sum($a, $b){
            echo $a + $b;
        }

        $one = 10;
        $two = 20.55;

        sum($one, $two);



    ?>
</body>
</html>