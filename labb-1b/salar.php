<?php
/*
 * PHP version 7
 * @category   Lånekalkylator
 * @author     Pontus Carlstedt <pontus.carlstedt@hotmail.com>
 * @license    PHP CC
 */
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Skolans salar</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontainer">
    <h1>Skolans salar</h1>
    <?php

$textFil = "salar.tsv";

if (is_readable($textFil)) {
    $rader = file($textFil);
    echo "<table>";
    echo "<tr>
        <th>Nr</th>
        <th>Namn</th>
        <th>Typ av sal</th>
        <th>Bokbar</th>
        </tr>";

    foreach ($rader as $rad) {

        $delar = explode("\t", $rad);
        $salNrNamn = $delar[1];
        $bokbar = $delar[3];

        if ((strstr($salNrNamn, "/") || $salNrNamn == "430" || $salNrNamn == "522" || substr($salNrNamn, 0, 1) == "A" || $salNrNamn == "Biblioteket" || $salNrNamn == "Dr Kristinas sal") && $salNrNamn != "APL" && $salNrNamn != "Annan plats") {
            if (strstr($salNrNamn, "/")) {
                $delar = explode("/", $salNrNamn);
                $salNr = $delar[0];
                $salNamn = $delar[1];

            } else {

                $salNr = $delar[1];
                $salNamn = "";

            }
            $salNr = $delar[1];
            if (strstr($salNrNamn, " (")) {
                $delar = explode(" (", $salNrNamn);
                $salNr = $delar[0];
                $salNamn = substr($delar[1], 0, -1);

            } else {

            }

            if (strstr($salNr, "-")) {
                $delar = explode("-", $salNr);

                $salNr = $delar[0];
                $salTyp = $delar[1];

            } else {
                $salTyp = "sal";

            }
            if ($bokbar == "1") {
                echo "<tr>
                <td>$salNr</td>
                <td>$salNamn</td>
                <td>$salTyp</td>
                <td class=\"grön\">$bokbar</td>
                </tr>";
                
            } else {
                echo "<tr>
                <td>$salNr</td>
                <td>$salNamn</td>
                <td>$salTyp</td>
                <td class=\"röd\">$bokbar</td>
                </tr>";
                
            }

        } else {

        }

    }
    echo "</table>";
} else {
    echo "<p>$textFil går inte att läsa!";
}

?>
    </div>
</body>
</html>