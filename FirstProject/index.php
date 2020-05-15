<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="#" method="get">
        
        <label for="">Please Enter Your Name : </label>
        <input type="text" name="" id="username" required>

        <br><br>

        <label for="">Please Enter Your Salary : </label>
        <input type="text" name="" id="usersalary" required>

        <br><br>

        <input type="submit" value="Click Here" name="btnsubmit">

    </form>

    <?php
        # $variablename = value;

        // $num = 8907;
        // $weight = 77.6;
        // $msg = "This is message"

        // echo "Value of num variable" . $num . "<br>";

        // echo "Value of num variable" . $weight. "<br>";
        // echo $msg;


        // $num1 = 4;
        // $num2 = 3;

        // $sum = $num1 + $num2;

        // echo "<h1>Addition : " . $sum . "</h1>";

        // $sub = $num1 - $num2;
        // echo "<h1>Addition : " . $sub . "</h1>";

        // $mul = $num1 * $num2;
        // echo "<h1>Addition : " . $mul . "</h1>";

        // $div = $num1 / $num2;
        // echo "<h1>Addition : " . $div . "</h1>";
        

        if(isset($_GET[''])){
            $name = $_GET['username'];
            $sal = $_GET['usersalary'];
    
            print "<h1>Your Name is : " . $name . "</h1>";
            print "<h1>Your Salary is : " . $sal . "</h1>";
        }

        


    ?>
</body>
</html>