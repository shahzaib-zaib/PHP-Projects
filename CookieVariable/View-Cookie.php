<?php

    echo "Cookie Vlaue : " . $_COOKIE["user"];

    setcookie("user", "", time() - (86400 * 30), "/");
?>