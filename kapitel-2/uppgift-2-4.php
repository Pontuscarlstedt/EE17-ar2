<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Script 2.4</title>
    <link rel="stylesheet" href="https://cdn.rawgit.com/Chalarangelo/mini.css/v3.0.1/dist/mini-default.min.css">
    <link rel="stylesheet" href="uppgift-1-1.css">
</head>
    <div class="kontainer">
        <h1>Uträkning</h1>
        <?php
        $grader = $_REQUEST["grader"];
        $fahrenheit = 9/5;
        echo $grader * $fahrenheit + 32;
        

        ?>

    </div>
</body>
</html>