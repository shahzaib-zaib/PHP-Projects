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



        //Function Argument By Reference
        function testing($string){
            $string .= "and something extra";
        }

        $str = "This is a string";
        testing($str);
        echo $str;


        function first($num){
            $num += 5;
        }

        function second(&$num){
            $num += 7;
        }

        $number = 10;
        first($number);
        echo "Orignal Value is $number<br>";

        second($number);
        echo "Orignal Value is $number<br>";

        

        //Variable Function
        function wow($name){
            echo "Hello $name";
        }

        $func = "wow";
        $func("Shahzaib");


        //anonymous Function
        $sayHello = function($name){
            echo "Hello $name";
        };

        $sayHello("Shahzaib");




        //Recursive Function 1
        function display($number){
            if ($numbre <= 5) {
                echo "$number <br>";
                display($number + 1)
            }
        }

        display(1);


        //Recursive Function 2
        function factorial($n){
            if ($n == 0) {
                return 1;
            }else{
                return ($n * factorial($n-1));
                //f(n) = n x f(n-1)
                //f(5) = 5 x f(5-1) = 5 x f(4)
                    // 5 x 4 x f(4-1) = 20 x f(3)
                    // 20 x 3 x f(3-1) = 60 x f(2)
                    // 60 x 2 x f(2-1) = 120 x f(1)

            }
        }

        echo factorial(5);

    ?>
</body>
</html>