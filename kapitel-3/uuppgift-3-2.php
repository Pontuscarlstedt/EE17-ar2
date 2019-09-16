<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Namn och lösenord</title>
    <link rel="stylesheet" href="https://cdn.rawgit.com/Chalarangelo/mini.css/v3.0.1/dist/mini-default.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    $fel = $_REQUEST["fel"];
    if ($fel == "ja") {
        echo "<p>Andvändarnamn eller lösenord är fel</p>";
    }
    ?>
        <form action="./uppgift-3-2.php" method="POST">
            <h2>Kontaktuppgifter</h2><br>
            <label>Användarnamn</label>
            <input type="text" name="anamn" required>
            <label>Lösenord</label>
            <input type="password" name="lösenord" required>

            <button class="primary">Skicka</button>
        </form>
</body>
</html>