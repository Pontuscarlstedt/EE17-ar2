<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fillista</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="kontainer">
        <h1>Katalog</h1>

        <?php
    $katalog = "../kapitel-7";

    $resultat = scandir($katalog);
    echo "<table>";
  echo  "<tr><th></th><th>Namn</th></tr>";
    foreach ($resultat as $objekt) {
        /* Inte ta med punkterna */
        if ($objekt !='.' && $objekt !='..') {

            /* Är det en katalog? */
            if (is_dir("$katalog/$objekt")) {
                echo 
                "<tr>
                <td><i class='fa fa-folder'></i></td>
                <td>$objekt</td>
                </tr>";
            } else {
                echo 
                
                "<tr>
                <td><i class='fa fa-file'></i></td>
                <td>$objekt</td>
                </tr>";
                $filInfo = pathinfo($objekt);
                $filtyp = $filInfo['extension'];
         
            }


            
           
        }

       
        
    }
   echo "</table>";
    ?>
    </div>
</body>
</html>