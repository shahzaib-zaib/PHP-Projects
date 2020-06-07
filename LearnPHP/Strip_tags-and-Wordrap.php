<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $str = "Hello <b>World</b>, Hello <i>Earth</i>";
        echo $str;

        echo strip_tags($str);

        echo strip_tags($str, "<b>");




        $strr = "This world is beautiful.";

        echo wordwrap($strr, 4, "<br>", TRUE);




    ?>
</body>
</html>