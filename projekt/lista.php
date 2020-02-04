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
    <main>
            <div class="inlaggen">
                <?php
                /* Logga in */
                $conn = new mysqli($host, $användare, $lösenord, $databas);
                /* Gick det att ansluta? */
                if ($conn->connect_error) {
                    die("Kunde inte ansluta till databasen: " . $conn->connect_error);
                } else {

                } 
                $query = "SELECT * FROM blogg";
                $resultat = $conn->query($query);
                /* Gick det bra? */
                if (!$resultat) {
                    die("Något blev fel med sql satsen");
                } else {
                   
                }
                echo "<table>";
                echo "<tr><th>Datum</th><th>Rubrik</th><th>Inlägg</th><th>Handling</th></tr>";
                while ($rad = $resultat->fetch_assoc()) {
                    echo "<tr>
                    <td>$rad[datum]</td>
                    <td>$rad[rubrik]</td>
                    <td>$rad[inlagg]</td>
                    <td>
                    <a href="."><i class=\"fa fa-edit\" style=\"font-size:26px\"></i></a>
                    <a href=\"./radera.php?id=$rad[id]\"><i class=\"fa fa-trash-o\" style=\"font-size:26px \"></i></a>
                    </td>
                    </tr>";

                };
                $conn->close();



                ?>
            </div>
        </main>


    </div>
</body>
</html>