<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $a1 = array("a" => "red", "b" => "green", "c" => "blue", "d" => "yellow");
        $a2 = array("a" => "red", "f" => "green", "d" => "purple");
        $a3 = array("a" => "red", "f" => "black", "d" => "yellow");

        $newarray = array_diff($a1, $a2, $a3);

        echo "<pre>";
        print_r($newarray);
        echo "</pre>";




        $a1 = array("a" => "red", "b" => "green", "c" => "blue", "d" => "yellow");
        $a2 = array("a" => "red", "f" => "green", "d" => "purple");

        $newarray = array_diff_key($a1, $a2);

        echo "<pre>";
        print_r($newarray);
        echo "</pre>";



        $a1 = array("a" => "red", "b" => "green", "c" => "blue", "d" => "yellow");
        $a2 = array("a" => "red", "f" => "green", "d" => "purple");

        $newarray = array_diff_assoc($a1, $a2);

        echo "<pre>";
        print_r($newarray);
        echo "</pre>";




        function compare($a, $b){
            if ($a === $b) {
                return 0;
            }
            return ($a > $b)? 1 : -1;
        }
        $a1 = array("a" => "red", "b" => "green", "c" => "blue", "d" => "yellow");
        $a2 = array("a" => "red", "f" => "green", "d" => "purple");

        $newarray = array_diff_uassoc($a1, $a2, "compare");

        echo "<pre>";
        print_r($newarray);
        echo "</pre>";






        function compare($a, $b){
            if ($a === $b) {
                return 0;
            }
            return ($a > $b)? 1 : -1;
        }
        $a1 = array("a" => "red", "b" => "green", "c" => "blue", "d" => "yellow");
        $a2 = array("a" => "red", "f" => "green", "d" => "purple");

        $newarray = array_udiff_assoc($a1, $a2, "compare");

        echo "<pre>";
        print_r($newarray);
        echo "</pre>";





        function compare($a, $b){
            if ($a === $b) {
                return 0;
            }
            return ($a > $b)? 1 : -1;
        }
        $a1 = array("a" => "red", "b" => "green", "c" => "blue", "d" => "yellow");
        $a2 = array("a" => "red", "f" => "green", "d" => "purple");

        $newarray = array_diff_ukey($a1, $a2, "compare");

        echo "<pre>";
        print_r($newarray);
        echo "</pre>";





        function compare($a, $b){
            if ($a === $b) {
                return 0;
            }
            return ($a > $b)? 1 : -1;
        }
        $a1 = array("a" => "red", "b" => "green", "c" => "blue", "d" => "yellow");
        $a2 = array("a" => "red", "f" => "green", "d" => "purple");

        $newarray = array_udiff($a1, $a2, "compare");

        echo "<pre>";
        print_r($newarray);
        echo "</pre>";








        function compare($a, $b){
            if ($a === $b) {
                return 0;
            }
            return ($a > $b)? 1 : -1;
        }
        function compareValue($a, $b){
            if ($a === $b) {
                return 0;
            }
            return ($a > $b)? 1 : -1;
        }
        $a1 = array("a" => "red", "b" => "green", "c" => "blue", "d" => "yellow");
        $a2 = array("a" => "red", "f" => "green", "d" => "purple");

        $newarray = array_udiff_uassoc($a1, $a2, "compare", "compareValue");

        echo "<pre>";
        print_r($newarray);
        echo "</pre>";

    ?>
</body>
</html>