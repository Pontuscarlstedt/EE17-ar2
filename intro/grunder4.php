<?php
$titel = date('l \vW');
$lista = ["ica", "coop", "max", "subway"];
$slumpTal = rand(0,3);
$matStälle = $lista[$slumpTal];
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $titel?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontainer">
        <h1>Bästa matstället</h1>
        <?php
        echo "<p>Bästa matstället är $matStälle</p>";
        ?>
    </div>
</body>
</html>