<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $str = "A 'quote' is <b>bold</b>";

        echo $str . "<br><br>";

        echo htmlentities($str, ENT_QUOTES);
        echo htmlentities($str, ENT_NOQUOTES);

        echo htmlspecialchars($str, ENT_QUOTES);
        echo htmlspecialchars($str, ENT_NOQUOTES);

        $htmlent = echo htmlentities($str, ENT_NOQUOTES);
        echo $htmlent;
        echo html_entity_decode($htmlent);


        $htmlent = htmlspecialchars($str, ENT_NOQUOTES);
        echo $htmlent;
        echo htmlspecialchars_decode($htmlent);






        $strr = '<a href="https://www.thezaib.com">Zaib. Website</a>'

        echo $strr . "<br><br>";

        echo htmlentities($strr, ENT_QUOTES);
        echo htmlentities($strr, ENT_NOQUOTES);

        echo htmlspecialchars($strr, ENT_QUOTES);
        echo htmlspecialchars($strr, ENT_NOQUOTES);

        $htmlent = echo htmlentities($strr, ENT_NOQUOTES);
        echo $htmlent;
        echo html_entity_decode($htmlent);

        $htmlent = htmlspecialchars($str, ENT_NOQUOTES);
        echo $htmlent;
        echo htmlspecialchars_decode($htmlent);







        #========================= Special Charactors List =========================#

        echo "<pre>";
        print_r(get_html_translation_table(HTML_SPECIALCHARS));
        echo "</pre>";





         #========================= Entities List =========================#

         echo "<pre>";
         print_r(get_html_translation_table(HTML_ENTITIES));
         echo "</pre>";
    ?>
</body>
</html>