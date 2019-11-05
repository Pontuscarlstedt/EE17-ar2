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
    echo "<h1>Veckans horoskop v.$veckonr</h1> ";

    

    $tecknen = ["Väduren", "Oxen", "Tvillingarna", "Kräftan", "Lejonet", "Jungfrun", " Vågen", "skorpionen", "Skytten", "Stenbocken", "Vattumannen", "Fiskarna"];

    foreach ($tecknen as $index => $tecken) {
        $i = $index + 1;


        $sidan = file_get_contents("https://www.tidningennara.se/astrologi/veckans-horoskop/?sign=$i");

        $start = strpos($sidan, "<div class=\"col-xs-7 col-sm-7\">") + 33;

        if ($start !== false) {

            $slut = strpos($sidan, "</div>", $start + 6);
            if ($slut !== false) {
                $horoskop = substr($sidan, $start, $slut - $start);
                echo "<h2>$tecken</h2>";
                echo "<p>$horoskop</p>";
    
           } else {
               echo "<p>Hittade inte vart horoskopet slutade!</p>";
               
           }

       } else {
           echo "<p>Hittade inte vart horoskopet började!</p>";
           
       }

    }
    ?>
    </div>
</body>
</html>