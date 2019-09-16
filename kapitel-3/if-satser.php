<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>if satser</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    $lösenord = "12345";

    if ($lösenord !="12345") {
        echo "<p>Dom är inte lika</p>";
        
    } else {
        echo "<p>Dom är lika</p>";
    }

    $idag = date("l");
    if ($idag == "Monday") {
        echo "<p>Laugh on Monday, laugh for danger.</p>";
    } elseif ($idag == "Tuesday") {
       echo  "<p>Laugh on Tuesday, kiss a stranger.</p>" ;
    } elseif ($idag == "Wednesday") {
      echo  "<p>Laugh on Wednesday, laugh for a letter.</p>";
    }
    elseif ($idag == "Thursday") {
      echo  "<p>Laugh on Thursday, something better.</p>";
    }
    elseif ($idag == "Friday") {
     echo  "<p>Laugh on Friday, laugh for sorrow.</p>";
    }
    elseif ($idag == "Saturday") {
     echo "<p>Laugh on Saturday, joy tomorrow.</p>";
    }
    elseif ($idag == "Sunday") {
        echo "<p>sunday</p>";
      
    }

    $månad = date("F");
    $dagensDatum = date("d");

    if ($idag == "Friday" && $dagensDatum == "13") {
        echo "<p>Bäst att du håller dig inne </p>";
    } else {
        echo "<p>De är lugnt!! </p>";
    }

    if ($dagensDatum == "30" && $månad == "October") {
        echo "<p>Dagen innan halloween!! </p>";
    } else {
        echo "<p>Snart så!! </p>";
    }

    if ($idag == "Saturday" || $idag == "Sunday") {
       echo "<p>Härligt! Idag är det helg! </p>";
    } else {
        $antalDagar = 5 - date("N");
       echo "<p>Fan då! får vänta $antalDagar dagar till nästa helg. </p>";
    }
    
    


  
    ?>
</body>
</html>