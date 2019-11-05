<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Strängfunktioner</title>
    <link rel="stylesheet" href="https://cdn.rawgit.com/Chalarangelo/mini.css/v3.0.1/dist/mini-default.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Omblanda tal till morsekod</h1>
    <?php
    $land = "Sverige";
    $delar = str_split($land);
    foreach ($delar as $bokstav) {
        echo "<p>$bokstav</p>";
        
    }

    $mening = "Sverige är ett land i norden";
    $delar = explode(" ", $mening);

    foreach ($delar as $ord) {

        echo "<p>$ord</p>";
    }

    $mening = "   Sverige är ett land i norden   ";
    $trimmaMening = trim($mening);
    echo "<p>$mening</p>";


    $mening = "Sverige är ett land i norden";
    $längd = strlen($mening);
    echo "<p>Meningen är $längd tecken lång</p>";


    $url = "https://classroom.google.com/u/1/c/Mzc1MzQyODMwNjZa/a/MjQwNjI0MDcwMzBa/details";
    $start = substr($url, 0, 4);
    echo "<p>De första 4 tecknen är $start</p>";
    $del = substr($url, 18, 6);
    echo "<p>$del</p>";


    if (strstr($url, "google")) {
        echo "<p>Ordet hittades i texten</p>";
        
    } else {
        echo "<p>Ordet hittades inte i texten</p>";
    }
    $positon = strpos($url, "google");
    echo "<p>Ordet google finns på position $positon</p>";

    $nyUrl = str_replace("google", "netflix", $url);
    echo "<p>$nyUrl</p>";

    

    ?>



</body>
</html>