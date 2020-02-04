<?php
/*
* PHP version 7
* @category   Webbshop
* @author     Karim Ryde <karye.webb@gmail.com>
* @license    PHP CC
*/
include_once "./funktioner.inc.php";
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Webbshop - steg 6 - </title>
    <link rel="stylesheet" href="./shop.css">
</head>
<body>
    <div class="kontainer">
        <h1>Bygg din egen PC - steg 6</h1>
        <h2>Varukorg</h2>
        <?php
        /* Visa innehållet på varukorgen = varukorg.txt */
        $varukorg = "./varukorg.txt";

        /* Ta imot data */
        $vara = filter_input(INPUT_POST, 'vara', FILTER_SANITIZE_STRING);


        /* Spara i varukorg.txt */
        if ($vara) {
            $handtag = fopen($varukorg, 'a');
            fwrite($handtag, "$vara\n");
            fclose($handtag);
        }

        if (is_readable($varukorg)) {
            /* Läs in textfilen varukorg.txt i en array */
            $rader = file($varukorg);
            /* Skriv ut rad-för-rad */
            echo "<table>";
            foreach ($rader as $rad) {
        
                $vara = vara($rad);
                $pris = pris($rad);
        
                echo
                    "<tr>
                        <td>$vara</td>
                        <td>$pris kr</td>
                        </tr>";  
            }echo "</table>";    
        } else {
            echo "<p>Varukorgen saknas!</p>";
        }
        ?>
        <h2>Välj Grafikkort</h2>
        <form action="./steg7.php" method="post">
        <?php
        /* Lista alla produkter i katalogen */
        $katalog = "./shop-bilder/grafikkort";
        /* Hämta katalogens innehåll */
        $filer = scandir($katalog);
        foreach ($filer as $fil) {
            $info = pathinfo("./$fil");
            if ($info['extension'] == 'jpg' || $info['extension'] == 'png' || $info['extension'] == 'webp') {
                echo "<label>";
                echo "<input type=\"radio\" name=\"vara\" value=\"$fil\">";
                echo "<img src=\"$katalog/$fil\">";
                $vara = vara($fil);
                $pris = pris($fil);
                echo "$vara $pris kr";
                echo "</label>";
            }
        }
        ?>
        <button>Nästa</button>
        </form>
    </div>
</body>
</html>