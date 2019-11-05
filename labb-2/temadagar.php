<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Veckans horoskop</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontainer">
    <?php

    $veckonr = date('W');
    echo "<h1>Demadagar v.$veckonr</h1> ";

        $sidan = file_get_contents('https://temadagar.se');

        $start = strpos($sidan, "No hate day");

        if ($start !== false) {

            $slut = strpos($sidan, "</a>", $start);
            if ($slut !== false) {
                $teamdag = substr($sidan, $start, $slut - $start);
                echo "<h2>$tecke</h2>";
                echo "<p>$temadag</p>";
    
           } else {
               echo "<p>Hittade inte vart horoskopet slutade!</p>";
               
           }

       } else {
           echo "<p>Hittade inte vart horoskopet började!</p>";
           
       }

    
    ?>
    </div>
</body>
</html>