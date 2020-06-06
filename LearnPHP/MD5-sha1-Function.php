<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $str = "Hello";

        echo "The String : " . $str . "<br><br>";

        echo "md5 binary : " . md5($str, TRUE) . "<br><br>";

        echo "md5 HEX : " . md5($str) . "<br><br>";







        $strr = "Hello";

        echo "The String : " . $strr . "<br><br>";

        echo "sha1 binary : " . sha1($strr, TRUE) . "<br><br>";

        echo "sha1 HEX : " . sha1($strr) . "<br><br>";

    ?>
</body>
</html>