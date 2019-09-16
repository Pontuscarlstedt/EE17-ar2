<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontainer">
        <h1>Bekräftelse</h1>
        <?php
        $anamn = $_REQUEST["anamn"];
        $lösenord = $_REQUEST["lösenord"];

        if ($anamn == "Pontus" && $lösenord == "123") {
            echo "<p>Du är inloggad!!</p>";

        } else {
            header("Location: uppgift-3-2.html"?fel=ja);

        }
        
        ?>
    
    
    </div>
</body>
</html>