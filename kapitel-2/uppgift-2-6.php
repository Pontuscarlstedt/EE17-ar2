<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Script 2.4</title>
    <link rel="stylesheet" href="https://cdn.rawgit.com/Chalarangelo/mini.css/v3.0.1/dist/mini-default.min.css">
    <link rel="stylesheet" href="uppgift-1-1.css">
</head>
    <div class="kontainer">
        <h1>Uträkning</h1>
        <?php
        $grader = $_REQUEST["grader"];
        $val = $_REQUEST["val"];

       
        

        if ($val == "CF") {
             $fahrenheit = (9/5) * $grader + 32;
            echo "<p> $grader&deg; Celsius är $fahrenheit&deg; Fahrenhait.</p>";
        }
        elseif ($val == "CK") {
            $kelvin = $grader - 273;
            echo "<p> $grader&deg; Celsius är $kelvin&deg; Kelvin.</p>";

        }
        else {
             $celcius = ($grader - 32) * (5/9);
             echo "<p> $grader&deg; Fahrenheit är $celcius&deg; Celcius.</p>";
        }

        

        

        ?>

    </div>
</body>
</html>