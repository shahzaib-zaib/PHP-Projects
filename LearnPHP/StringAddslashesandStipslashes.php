<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $str = "Hello I am 'Shahzaib Zaib'";

        echo $str . "<br>";

        echo addslashes($str);

        $newStr = addslashes($str);

        echo stripslashes($newStr);





        $strr = "Hello I am 'Shahzaib Zaib'";

        $newStrr = addcslashes($strr, "Z");
        $newStrr = addcslashes($strr, "A..Z");
        $newStrr = addcslashes($strr, "a..z");


        echo $newStrr; // add slashes

        echo stripcslashes($newStrr); // remove slashes


    ?>
</body>
</html>