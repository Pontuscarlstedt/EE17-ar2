<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Loopar</title>
    <link rel="stylesheet" href="https://cdn.rawgit.com/Chalarangelo/mini.css/v3.0.1/dist/mini-default.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    echo "<p>";
    for ($i=0; $i < 10; $i++) { 
        echo "Steg $i, ";
    }
    echo "</p>";

    echo "<p>Steg ";
    for ($i=0; $i < 10; $i++) { 
        echo "$i, ";
    }
    echo "</p>";

    echo "<p>";
    for ($i=0; $i < 10; $i++) { 
        $i10 = $i * 10;
        echo " $i $i10 <br>";
        
        
    }
    echo "</p>";

    echo "<table>";
    echo "<tr>
    <th>Talet</th>
    <th>Talet *10</th>
    </tr>";
    for ($i=0; $i < 10; $i++) { 
        $i10 = $i * 10;
        echo "<tr>
              <td> $i </td>
              <td> $i10</td>
              </tr>";
        
        
    }
    echo "</table>";


    echo "<table>";
    echo "<tr>
    <th>Talet</th>
    </tr>";
    for ($i=10; $i > 0; $i--) { 
        echo "<tr>
              <td> $i </td>
              </tr>";
        
        
    }
    echo "</table>"; 


    echo "<table>";
    echo "<tr>
    <th>Talet</th>
    </tr>";

    $i = 10;
    while ($i > 0) {
        $i2 = $i * $i;
    echo "<tr>
        <th>$i2</th>
    </tr>";
    $i--;
}
    echo "</table>";
    ?>
    
</body>
</html>