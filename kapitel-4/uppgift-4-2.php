<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Uppgift-4-2</title>
    <link rel="stylesheet" href="https://cdn.rawgit.com/Chalarangelo/mini.css/v3.0.1/dist/mini-default.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="./uppgift-4-2.php" method="POST">
    <h2>Sorterad namnlista</h2><br>
    <label>Namn</label>
    <input type="text" name="namn1" required><br>
    <input type="text" name="namn2" required><br>
    <input type="text" name="namn3" required><br>
    <input type="text" name="namn4" required><br>
    <input type="text" name="namn5" required><br>
    <input type="text" name="namn6" required><br>
    <input type="text" name="namn7" required><br>
    <input type="text" name="namn8" required><br>
    <input type="text" name="namn9" required><br>
    <input type="text" name="namn10" required><br>

    <button>Skicka</button>
</form>
<?php
    $namn = filter_input_array(INPUT_POST);


if ($namn) {

    $radNr = 1;

    sort($namn);
echo "<table>";
foreach ($namn as $namnet) {
    if ($radNr % 2) {
        echo "Udda";
        echo "<tr><td>$radNr</td><td> $namnet</td></tr>";
    } else {
        echo "Jämnt";
        echo "<tr class=\"grå\"><td>$radNr</td><td> $namnet</td></tr>";
    }
    
    $radNr++;
    
}
echo "</table>";
}

?> 



</body>
</html>