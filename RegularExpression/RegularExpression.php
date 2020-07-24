<?php

$string = "PHP is the web scripting language of choice.";

$exp = preg_match("/PHP/i",$string); // i for use case insensitive

if($exp){
    echo "A match was found";
}else{
    echo "A match was not found";
}



$string1 = "PHP is the web php scripting language of choice.";

$exp1 = preg_match_all("/PHP|web|the/i",$string1,$array); // i for use case insensitive

if($exp1){
    echo "A match was found";
}else{
    echo "A match was not found";
}

echo "<pre>";
print_r($array);
echo "</pre>";


?>