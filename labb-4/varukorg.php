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
    <title>Webbshop - steg 9 - </title>
    <link rel="stylesheet" href="./shop.css">
</head>
<body>
    <div class="kontainer">
        <h1>Bygg din egen PC - steg 9</h1>
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
    $total = 0;
    /* Skriv ut rad-för-rad */
    echo "<table>";
    echo "<thead>";
    "<tr>
    <th>Vara</th>
    <th>Antal</th>
    <th>Pris</th>
    <th>Summa</th>
    </tr>";
    "</thead>";
    echo "<tbody>";
    foreach ($rader as $rad) {

        $vara = vara($rad);
        $pris = pris($rad);
        $total = $total + $pris;

        echo
            "<tr>
                <td>$vara</td>
                <td> <button id=\"minus\">-</button> <span id=\"antal\">1</span> <button id=\"plus\">+</button> </td>
                <td id=\"pris\">$pris kr</td>
                <td id=\"summa\">$pris kr</td>
                </tr>";
    }
    echo "</tbody>";
    echo "<tfoot>";
    echo "</tfoot>";
    echo "<tr>
    <td></td>
    <td></td>
    <td></td>
    <td id=\"total\">$total kr</td>
    </tr>";

    echo "</table>";
} else {
    echo "<p>Varukorgen saknas!</p>";
}

?>
        </form>
    </div>
    <script src="./shop.js"></script>

</body>
</html>