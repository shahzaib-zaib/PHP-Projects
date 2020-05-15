<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $age = 20;

        if ($age >= 18 && $age <= 21) {
            echo "You are eligible.";
        }

        $age = 20;

        if ($age >= 18 and $age <= 21) {
            echo "You are eligible.";
        }

        $age = 25;

        if ($age >= 18 || $age <= 21) {
            echo "You are eligible.";
        }

        $age = 25;

        if ($age >= 18 or $age <= 21) {
            echo "You are eligible.";
        }

        $age = 25;

        if (!($age <= 18)) {
            echo "You are eligible.";
        }

        $age = 26; //condition true

        if ($age >= 18 xor $age <= 21) {
            echo "You are eligible.";
        }

        

    ?>
</body>
</html>