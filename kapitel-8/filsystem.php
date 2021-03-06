<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Filsystem</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    $katalog = "..";

    /* Skanna av katalogen */
    $resultat = scandir($katalog);

    /* Skriv ut allt vi hittat */

    foreach ($resultat as $objekt) {
        /* Inte ta med punkterna */
        if ($objekt !='.' && $objekt !='..') {

            /* Är det en katalog? */
            if (is_dir("$katalog/$objekt")) {
                echo "<p>Katalog: $objekt</p>"; 
            } else {
                echo "<p>Fil: $objekt</p>"; 
                $filInfo = pathinfo($objekt);
                $filtyp = $filInfo['extension'];
                echo "<p>Filtypen är $filtyp</p>";
            }
           
        }

       
        
    }
    ?>

</body>
</html>