<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="uppgift-1-1.css">
</head>
<body>
    <div class="kontainer">
<?php
$forstanummret = $_REQUEST["forstanummret"];
$andranummret = $_REQUEST["andranummret"];

$resultat = $forstanummret * $andranummret;

echo "<p>Produkten av de två talen är $resultat</p>"
?>
</div>

</body>
</html>