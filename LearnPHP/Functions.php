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
            echo "Hello $fname $lname.<br>";
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


        //Function with return
        function hello($fname="First",$lname="Last"){
            $v =  "$fname $lname";

            return $v;
        }

        echo hello("Shahzaib" , "Zaib");



        function hello($fname="First",$lname="Last"){
            $v =  "$fname $lname";

            return $v;
        }

        $name hello("Shahzaib" , "Zaib");

        echo "Hello $name";



        function sum($math, $eng, $sc){
            $s = $math + $eng + $sc
            return $s;
        }

        function percentage($st){
            $per = $st / 3;

            echo $per;
        }

        $total = sum(55,65,88);

        percentage($total);

        echo $total;

    ?>
</body>
</html>