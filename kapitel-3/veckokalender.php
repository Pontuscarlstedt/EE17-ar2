<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Veckokalender</title>
    <link rel="stylesheet" href="https://cdn.rawgit.com/Chalarangelo/mini.css/v3.0.1/dist/mini-default.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    echo date("l");
    setlocale(LC_ALL, "sv_sv");
    $idag = strftime("%A %y %B");
    echo $idag;


    echo "<table class=\"kol2\">";
    echo "<tr>";
    echo "<th>Måndag</th>";
    echo "<th>Tidag</th>";
    echo "<th>Ondag</th>";
    echo "<th>Torsdag</th>";
    echo "<th>Fredag</th>";
    echo "<th>Lördag</th>";
    echo "<th>Söndag</th>";
    echo "</tr>";
    echo "</table>";
    
    ?>
    
</body>
</html>