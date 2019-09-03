<?php
$förnamn = $_REQUEST["förnamn"];
$efternamn = $_REQUEST["efternamn"];
$mobilnummer = $_REQUEST["mobilnummer"];
$kön = $_REQUEST["kon"];
$hjälte = $_REQUEST["hjalte"];
$fotbollslag = $_REQUEST["fotbollslag"];
$kommentar = $_REQUEST["kommentar"];
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulär</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.rawgit.com/Chalarangelo/mini.css/v3.0.1/dist/mini-default.min.css">
</head>
<body>
<?php 
echo "<p>Tack för att du skickat in dina uppgifer!! <br>";
echo "Stämmer dessa uppgifter? <br>";
echo "Förnamn - $förnamn<br>";
echo "Efternamn - $efternamn<br>";
echo "Mobilnummer - $mobilnummer<br>";
echo "Kön - $kön<br>";
echo "Super hjälte - $hjälte<br>";
echo "Favorit fotbollslag - $fotbollslag<br>";
echo "Egen kommentar - $kommentar</p>";
?>
</body>
</html>




