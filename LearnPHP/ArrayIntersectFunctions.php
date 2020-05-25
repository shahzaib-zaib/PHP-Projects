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

        $newarray = array_intersect($a1, $a2);

        echo "<pre>";
        print_r($newarray);
        echo "</pre>";




        $a1 = array("a" => "red", "b" => "green", "c" => "blue", "d" => "yellow");
        $a2 = array("a" => "red", "f" => "green", "d" => "purple");

        $newarray = array_intersect_key($a1, $a2);

        echo "<pre>";
        print_r($newarray);
        echo "</pre>";




        $a1 = array("a" => "red", "b" => "green", "c" => "blue", "d" => "yellow");
        $a2 = array("a" => "red", "f" => "green", "d" => "purple");

        $newarray = array_intersect_assoc($a1, $a2);

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

        $newarray = array_intersect_uassoc($a1, $a2, "compare");

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

        $newarray = array_uintersect_uassoc($a1, $a2, "compare");

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

        $newarray = array_intersect_ukey($a1, $a2, "compare");

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

        $newarray = array_uintersect($a1, $a2, "compare");

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

        $newarray = array_uintersect_uassoc($a1, $a2, "compare", "compareValue");

        echo "<pre>";
        print_r($newarray);
        echo "</pre>";

        

    ?>
</body>
</html>