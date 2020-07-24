<?php

$string = "PHP is the web scripting language of choice.";

$exp = preg_match("/PHP/",$string);

if($exp){
    echo "A match was found";
}else{
    echo "A match was not found";
}

?>