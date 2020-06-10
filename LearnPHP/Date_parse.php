<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<pre>";
        print_r(date_parse("2015-03-15 12:30:25.5"));
        echo "</pre>";

        $date = date_parse("2015-03-15 12:30:25.5");
        echo $date['day'];





        echo "<pre>";
        print_r(date_parse_from_format("d.n.Y", "15.3.2015"));
        echo "</pre>";

    ?>
</body>
</html>