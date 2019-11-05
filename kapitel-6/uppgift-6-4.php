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

    
    $text = "";
    if (preg_match("/[a-zåäö0-9 .]+/i", $text)) {
        echo "<p>Texten matcher</p>";
    } else {
        echo "<p>Texten matchar inte</p>";
    }


    
    ?>
</body>
</html>