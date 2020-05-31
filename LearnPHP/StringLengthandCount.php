<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $str = "Hello World";
        echo strlen($str); // 11 alphabets or string length



        $str = "Hello Zaib World";
        $array =  str_word_count($str, 2); // 2 Words

        echo "<pre>";
        print_r($array);
        echo "</pre>";


        $str = "Hello world. The world is nice";
        echo substr_count($str, "world", 10); // Find Words
    ?>
</body>
</html>