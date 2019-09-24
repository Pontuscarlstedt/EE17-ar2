<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lånekalkulator</title>
    <link rel="stylesheet" href="https://cdn.rawgit.com/Chalarangelo/mini.css/v3.0.1/dist/mini-default.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="./uppgift-3-5b.php" method="POST">
    <h2>Låna</h2> <br>
    <label>Belopp</label>
    <input type="number" name="belopp" required>

    <label>Ränta</label>
    <input type="number" name="ranta" required>

    <label>Lånetid</label>
<div>
    <label>1 År</label>
    <input type="radio" name="låna" value="1" required><br>
    <label>3 År</label>
    <input type="radio" name="låna" value="3" required><br>
    <label>5 År</label>
    <input type="radio" name="låna" value="5" required><br>

    <button>Räkna ut!</button>
</div>
</form>
<?php
if (isset($_REQUEST["låna"], $_REQUEST["belopp"], $_REQUEST["ranta"])) {





$belopp = filter_input(INPUT_POST, $belopp, FILTER_DEFAULT);
$låna = filter_input(INPUT_POST, $låna, FILTER_DEFAULT);
$ranta = filter_input(INPUT_POST, $ranta, FILTER_DEFAULT);

$kostnad = $belopp;
for ($i=0; $i < $låna; $i++) { 

    $kostnad = $kostnad * (1 + $ranta / 100);
}
$kostnad = $kostnad - $belopp;
echo "<p>Totala lånekostnaden är $kostnad</p>";

}
?> 



</body>
</html>