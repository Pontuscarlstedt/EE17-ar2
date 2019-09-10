<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Script 2.7</title>
    <link rel="stylesheet" href="https://cdn.rawgit.com/Chalarangelo/mini.css/v3.0.1/dist/mini-default.min.css">
    <link rel="stylesheet" href="uppgift-1-1.css">
</head>
    <div class="kontainer">
        <h1>Omvandla</h1>
        <?php
        $text = $_REQUEST["text"];
        $val = $_REQUEST["val"];

        if ($val == "stora") {
            $varsaler = mb_strtoupper($text);
            echo "<p>$varsaler</p>";
        }
        else {
            $gemener = mb_strtolower($text);
            echo "<p>$gemener</p>";
        }



        ?>

    </div>
</body>
</html>