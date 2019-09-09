<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Script 2.2</title>
    <link rel="stylesheet" href="https://cdn.rawgit.com/Chalarangelo/mini.css/v3.0.1/dist/mini-default.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontainer">
        <?php
        $namn = $_REQUEST["namn"];
        $epost = $_REQUEST["epost"];
        $telefon = $_REQUEST["mobilnummer"];
        $noje = $_REQUEST["noje"];
        $kontakt = $_REQUEST["kontakt"];
    
    
    
        echo "<p> Namn: $namn</p>";
        echo "<p> E-mail: $epost</p>";
        echo "<p>Hej $namn ! </p>";
    
        //var_dump($kontakt);//
        echo "<p> Vi kommer kontakta dig snarast på $kontakt . </p>";
        ?>
    </div>
</body>
</html>