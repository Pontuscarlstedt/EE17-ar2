<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Labb-1</title>
    <link rel="stylesheet" href="https://cdn.rawgit.com/Chalarangelo/mini.css/v3.0.1/dist/mini-default.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontainer">
    <?php
$filnamn = './restauranger.csv';
if (is_readable($filnamn)) {
    $texten = file($filnamn);
    echo "<table>";

    foreach ($texten as $rad) {
        $delar = explode(", ", $rad);
         echo
        "<tr>
         <td>$delar[0]</td>
         <td>$delar[1]</td>
         <td>$delar[2]</td>
         <td>$delar[3]</td>
         </tr>"; 
            
        }
    echo "<table>";
}
        
else {
    echo "<p>Kan ej läsa filen</p>";
}


?>
    </div>
</body>
</html>