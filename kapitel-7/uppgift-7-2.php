<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Uppgift-7-1</title>
    <link rel="stylesheet" href="https://cdn.rawgit.com/Chalarangelo/mini.css/v3.0.1/dist/mini-default.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action=" <?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <h2>Formulär</h2><br>
        <label for="">Filnamn</label>
        <input name="filnamn" type="text">
        <button class="primary">Skicka</button>
    </form>

    <?php
    $filnamn = filter_input(INPUT_POST, "filnamn", FILTER_SANITIZE_STRING);

    if ($filnamn) {
      
    


    if (preg_match("/[a-zåäö0-9.]+/", $filnamn)) {
        echo "<p>Filnamnet är godkänt </p>";
       


    } else {
        echo "<p>Filnamnet är ickegodkänt</p>";

    }
}

?>
</body>
</html>