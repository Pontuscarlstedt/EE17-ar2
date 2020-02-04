<?php
include_once "./konfig-db.php";
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontainer">
        <h1>Alla bilar</h1>
        <?php
        /* Logga in */
        $conn = new mysqli($host, $användare, $lösenord, $databas);

        /* Gick det att ansluta? */
        if ($conn->connect_error) {
            die("Kunde inte ansluta till databasen: " . $conn->connect_error);
        } else {
            echo "<p>Gick bra att ansluta</p>";
        }
        

        /* Ställ en fråga */
        $sql = "SELECT * FROM bilar";
        $resultat = $conn->query($sql);

         /* Gick det bra? */
         if (!$resultat) {
             die("Något blev fel med sql satsen");
         } else {
             echo "<p>Lista på bilar hämtas</p>";
         }
         

        /* Ta emot svaret och bearbeta det */
        echo "<table>";
        echo "<tr><th>Märke</th><th>Modell</th><th>Årsmodell</th></tr>";
        while ($rad = $resultat->fetch_assoc()) {
            echo "<tr>
            <th>$rad[marke]</th>
            <th>$rad[modell]</th>
            <th>$rad[arsmodell]</th>
            </tr>";
            
            
        }
echo "</table>";

        /* Stäng ner anslutningen */
        $conn->close();
        ?>
    </div>
    
</body>
</html>