<?php
$number = $_POST['number'];
$choose = $_POST['choose'];

$meters = $number / ($choose == 'cm'? 100 : ($choose == 'foot'? 3.28084 : ($choose == 'inches'? 39.3701 : 1))); 

echo "Meters : $meters<br/>";
echo "Cm : ".($meters*100)."<br/>";
echo "Foot : ".($meters*3.28084)."<br/>";
echo "Inches : ".($meters*39.3701)."<br/>";
?>