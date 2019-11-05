<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<form action=" <?php echo $_SERVER['PHP_SELF'];?>" method="POST">
            <h2>Räkna ut ålder</h2><br>
            <label for="">Personnummer</label>
            <input type="text" name="nr" required>
            <button class="primary">Skicka</button>
        </form>

        <?php
        $nr = filter_input(INPUT_POST, 'nr', FILTER_SANITIZE_STRING);

        if ($nr) {
            $då = new DateTime($nr);

            $nu = new DateTime();

            $differens = $nu->diff($då);

            $antalÅr = $differens->y;
            $antalMånader = $differens->m;
            $antalDagar = $differens->d;

            echo "<p>Ditt personnummer är $nr</p>";
            echo "<p>Du är $antalÅr år gammal, $antalMånader månader och $antalDagar dagar</p>";

        }

        ?>
</body>
</html>