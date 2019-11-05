<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Uppgift-5-1</title>
    <link rel="stylesheet" href="https://cdn.rawgit.com/Chalarangelo/mini.css/v3.0.1/dist/mini-default.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
        <form action=" <?php echo $_SERVER['PHP_SELF'];?>" method="POST">
            <h2>Formulär</h2><br>
            <label for="">Namn</label>
            <input type="text" name="namn" required>
            <label for="">Adress</label>
            <input type="text" name="adress" required>
            <label for="">Postnr</label>
            <input type="text" name="postnr" required>
            <label for="">Postort</label>
            <input type="text" name="postort" required>

            <button class="primary">Skicka</button>
        </form>

        <?php 
        $namn = filter_input(INPUT_POST, "namn", FILTER_SANITIZE_STRING);
        $adress = filter_input(INPUT_POST, "adress", FILTER_SANITIZE_STRING);
        $postnr = filter_input(INPUT_POST, "postnr", FILTER_SANITIZE_STRING);
        $postort = filter_input(INPUT_POST, "postort", FILTER_SANITIZE_STRING);

        if ($namn && $adress && $postnr && $postort ) {

            if (strlen($namn) < 3) {

                echo "<p>Namnet är för kort</p>";
             }
            if (strlen($adress) < 3) {

                echo "<p>Adressen är för kort</p>";
             }
            if (strlen($postnr) < 3) {

                echo "<p>Post nummret är för kort</p>";
             }
            if (strlen($postort) != 5) {

                echo "<p>Post ort är för kort</p>";
             }
             if (!is_numeric($postnr)) {
                 echo "<p>Post nummret ska bara innehålla siffror</p>";
             }

            
        }

            
        ?>
</body>
</html>