<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    //Can use only small condition

        // $x = 10;

        // ($x > 20) ? $z = "Greater" : $z = "Smaller";

        // echo $z;

        // $x = 10;

        // $z = ($x > 20) ? "Greater" : "Smaller";

        // echo $z;

        // $x = 10;

        // $z = $x > 20 ? "Greater" : "Smaller";

        // echo $z;

        $x = 10;

        $z = "Value is : " . ($x > 20 ? "Greater" : "Smaller");

        echo $z;

    ?>
</body>
</html>