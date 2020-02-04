<?php
/*
 * PHP version 7
 * @category   Blogg med fillagring
 * @author     Karim Ryde <karye.webb@gmail.com>
 * @license    PHP CC
 */
session_start();
include_once "./konfig-db.php";
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Matdagbok</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>

<h1>Matdagbok</h1>
        <nav>
            <ul>
                <li><a  href="./lasa.php">Läsa</a></li>
                <li><a  href="./skriva.php">Skriva</a></li>
                <li><a  href="./lista.php">Ändra</a></li>
            </ul>
        </nav>
</header>
    <div class="kontainer">
        <h1  class="display-4">Gör ett mat-inlägg</h1>

        <main>
            <form action="#" method="post">
                <label>Bild</label>
                <input type="text" name="bild" >
                <label>Rubrik</label>
                <input type="text" name="rubrik" required>
                <label>Inlägg</label>
                <textarea class="form-control" name="info" id="info" cols="30" rows="10" required></textarea>
                <button class="btn btn-primary">Spara inlägg</button>
            </form>
            <?php
        /* Ta emot text från formuläret och spara ned i en textfil. */
        $rubrik = filter_input(INPUT_POST, 'rubrik', FILTER_SANITIZE_STRING);
        $info = filter_input(INPUT_POST, 'info', FILTER_SANITIZE_STRING);
        $bild = filter_input(INPUT_POST, 'bild', FILTER_SANITIZE_STRING);
        if ($rubrik && $info && $bild) {
                /* Logga in */
                $conn = new mysqli($host, $användare, $lösenord, $databas);
                /* Gick det att ansluta? */
                if ($conn->connect_error) {
                    die("Kunde inte ansluta till databasen: " . $conn->connect_error);
                } else {
                    echo "<p>Gick bra att ansluta</p>";
                }
                /* Registera inlägget */
                $sql = "INSERT INTO mat (rubrik, info, bild) VALUES ('$rubrik', '$info', '$bild')";
                $resultat = $conn->query($sql);

                /* Gick det bra? */
                if (!$resultat) {
                    die("Något blev fel med sql satsen");
                } else {
                    echo "<p>Inlägget har sparats</p>";
                }
                $conn->close();

        }
        ?>
        </main>
    </div>
</body>
</html>