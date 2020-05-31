<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $str = "Hello World. It's a beautiful day.";

        $array = explode(" ", $str);

        echo "<pre>";
        print_r($array);
        echo "</pre>";




        $str = "Hello World. It's a beautiful day.";

        $array = explode(" ", $str, 3);

        echo "<pre>";
        print_r($array);
        echo "</pre>";







        $str = 'red,green,blue,orange';

        $array = explode(",", $str);

        echo "<pre>";
        print_r($array);
        echo "</pre>";




        
        $array = array('Hello', 'World!', 'Beautiful', 'Day!');

        $str = implode(" ", $array);

        echo $str;
    ?>
</body>
</html>