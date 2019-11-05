<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    
    $text = "Det var en gång... det var en gång";
    if (preg_match("/[Dd]et var en gång/", $text)) {
        echo "<p>Text innehåller ordet 'Det var en gång'</p>";
    } else {
        echo "<p>Text innehåller inte ordet 'Det var en gång'</p>";
    }
    $text = "Det var en gång... det var en gång";
    if (preg_match("/Det var en gång/i", $text)) {
        echo "<p>Text innehåller ordet 'Det var en gång'</p>";
    } else {
        echo "<p>Text innehåller inte ordet 'Det var en gång'</p>";
    }
    
    ?>
</body>
</html>