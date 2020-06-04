<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        echo strcmp("Hello world!", "Hello world!"); // 0

        echo strcmp("Hello world!", "Hello"); // 7

        echo strcmp("Hello world!", "Hello world! Hello"); // -6

        echo strncmp("Hello world!", "Hello world!", 6); // 0

        echo strncmp("Hello world!", "hello world!", 6); // -6

        echo strcasecmp("HELLO world!", "hello world!", 6); // 0 case insenctive function

        echo strcasecmp("HELLO world!", "hello world! Hello"); // -6

        echo strncasecmp("HELLO world!", "hello world! Hello", 5); // 0

        echo strnatcmp("hello world!", "hello world!"); // -1

        echo strnatcmp("2hello world!", "10hello world!"); // -1

        echo strnatcmp("2hello world!", "2hello WORLD!"); // 1

        echo strnatcasecmp("2hello world!", "2hello WORLD!"); // 0 case insenctive function both are charectors are equal
        
        echo substr_compare("hello world!", "world!", 6); // 0 match

        echo substr_compare("hello world!", "world!", 0); // -1

        echo substr_compare("hello world!", "world!", 0, 3); // -1

        echo substr_compare("hello world!", "world!", 6, 3); // 0 match

        echo substr_compare("hello world!", "world!", -2, 2); // -1

        echo substr_compare("hello world!", "d!", -2, 2,); // 0

        echo substr_compare("hello worlD!", "d!", -2, 2, TRUE); // 0

        echo similar_text("hello worlD!", "Hello Shahzaib"); // 5

        echo similar_text("hello worlD!", "Hello Shahzaib", $per);
        echo "Percentage :" . $per;






    ?>
</body>
</html>