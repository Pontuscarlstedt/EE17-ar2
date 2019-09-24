<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lånekalkulator</title>
    <link rel="stylesheet" href="https://cdn.rawgit.com/Chalarangelo/mini.css/v3.0.1/dist/mini-default.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="./skript-3-5.php" method="POST">
    <h2>Låna</h2> <br>
    <label>Belopp</label>
    <input type="number" name="belopp" required>

    <label>Ränta</label>
    <input type="number" name="ranta" required>

    <label>Lånetid</label>
<div>
    <label>1 År</label>
    <input type="radio" name="låna" value="1" required><br>
    <label>3 År</label>
    <input type="radio" name="låna" value="3" required><br>
    <label>5 År</label>
    <input type="radio" name="låna" value="5" required><br>

    <button>Räkna ut!</button>
</div>
</form>
</body>
</html>