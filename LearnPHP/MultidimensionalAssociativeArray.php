<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $marks = [
            "Shahzaib" => [
                "physics" => 100,
                "math" => 100,
                "chemistry" => 100
            ],
            "Salman" => [
                "physics" => 68,
                "math" => 73,
                "chemistry" => 79
            ],
            "Faizan" => [
                "physics" => 62,
                "math" => 67,
                "chemistry" => 92
            ],
        ]


        echo "<table border='2px' cellpadding='5px' cellspacing='0'>
            
            <tr>
                <th>Student Name</th>
                <th>Physics</th>
                <th>Maths</th>
                <th>Chemistry</th>
            </tr>";

        foreach ($marks as $key => $v1) {
            echo "<tr>
                    <td>$key</td>";
                    foreach ($v1 as $v2) {
                        echo "<td> $v2 </td>";
                    }
            echo "</tr>"
        }
        echo "</table>";


        echo "<pre>";
        print_r($marks);
        echo "</pre>";

    ?>
</body>
</html>