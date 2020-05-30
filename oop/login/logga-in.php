<?php

/**
 * Inloggningsmodul med databas
 * 
 * PHP version 7
 * @category   OOP
 * @author     Karim Ryde <karye.webb@gmail.com>
 * @license    PHP CC
 */
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

/* Skapa en databasanslutning */
include_once("./resurser/konfig-db.php");

?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inloggning</title>
    <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.3.1/flatly/bootstrap.min.css" rel="stylesheet" integrity="sha384-T5jhQKMh96HMkXwqVMSjF3CmLcL1nT9//tCqu9By5XSdj7CwR0r+F3LTzUdfkkQf" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontainer">
        <header>
            <h1>Inloggning</h1>
            <nav>
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" href="logga-in.php">Logga in</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="registrera.php">Registrera</a>
                    </li>
                </ul>
            </nav>
        </header>
        <main>
            <?php
            /* Ta emot data */
            $anamn = filter_input(INPUT_POST, 'anamn', FILTER_SANITIZE_STRING);
            $lösen = filter_input(INPUT_POST, 'lösen', FILTER_SANITIZE_STRING);

            /* Om vi har tagit emot data då registrera i databasen */
            if ($anamn && $lösen) {
                /* @TODO: Be aanvädaren skriva lösenordet 2 ggr */
                /* Skapa en hash på lösenordet */
                

                /* SQL för spara i en tabell */
                $sql = "SELECT * FROM admin WHERE anamn='$anamn'";

                /* Kör SQL-frågan */
                $resultat = $conn->query($sql);

                /* Gick det bra? */
                if (!$resultat) {
                    die("<p class=\"alert alert-warning\">Kunde inte köra sql-frågan: $conn->error </p>");
                } else {
                    if ($resultat->num_rows == 0) {
                        echo ("<p class=\"alert alert-warning\">Användarnamnet finns ej</p>");
                    } else {
                        $rad = $resultat->fetch_assoc();

                        if (password_verify($lösen, $rad['hash'])) {
                            echo "<p class=\"alert alert-success\">Användaren är inloggad</p>";
                        } else {
                            echo ("<p class=\"alert alert-warning\">Lösenordet stämmer inte</p>");
                        }
                        
                    }
                    
                    
                }

                /* Stäng ned anslutningen */
                $conn->close();
            }
            ?>
            <form class="jumbotron" action="#" method="post">
                <label>Användarnamn</label>
                <input class="form-control" type="text" name="anamn" required>
                <label>Lösenord</label>
                <input class="form-control" type="password" name="lösen" required>
                <button class="btn btn-primary">Logga in</button>
            </form>
        </main>
    </div>
</body>
</html>