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
        <h2>Lägg till resturang</h2><br>
        <label for="">Resturang</label>
        <input name="resturang" type="text">
        <label for="">Adress</label>
        <input name="adress" type="text">
        <label for="">Post Nummer</label>
        <input name="postnr" type="text">
        <label for="">Stad</label>
        <input name="stad" type="text">
        <button class="primary">Skicka</button>
    </form>

    <?php
$resturang = filter_input(INPUT_POST, "resturang", FILTER_SANITIZE_STRING);
$adress = filter_input(INPUT_POST, "adress", FILTER_SANITIZE_STRING);
$postnr = filter_input(INPUT_POST, "postnr", FILTER_SANITIZE_STRING);
$stad = filter_input(INPUT_POST, "stad", FILTER_SANITIZE_STRING);

if ($resturang && $adress && $postnr && $stad) {

    $filnamn = './restauranger.csv';
    $handtag = fopen($filnamn, 'a');
    fwrite($handtag, "\n$resturang, $adress, $postnr, $stad");
    if (is_readable($filnamn)) {
        $texten = file($filnamn);
        echo "<table>";
    
        foreach ($texten as $rad) {
            $delar = explode(", ", $rad);
             echo
            "<tr>
             <td>$delar[0]</td>
             <td>$delar[1]</td>
             <td>$delar[2]</td>
             <td>$delar[3]</td>
             </tr>"; 
               
            }
        echo "<table>"; 
        fclose($handtag);
    }
    
} else {
    
}

?>
</body>
</html>