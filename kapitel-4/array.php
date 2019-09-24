<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $stad1 = "Stockholm";
    $stad2 = "Malmö";
    $stad3 = "Göterborg";
    $stad4 = "Linköping";

    $städer = ["Stockholm", "Malmö", "Göterborg", "Linköping"];
    $tomarray = [];
    $annanarray = array("Hej", "På", "Dig");

    print_r($städer);
    echo $städer[2] . "<br>";

    $städer[] = "Helsingborg";
    print_r($städer);

    foreach ($städer as $value) {
        echo "<p>Staden heter $value.</p>";
    }

    //$språk = ["Sverige", "Norge", "England];
    $språk['SE'] = "Sverige";
    $språk['NO'] = "Norge";
    $språk['EN'] = "England";
    print_r($språk);

    foreach ($språk as $index => $land) {

        echo "<p>$index är landskod för $land";
    }

    ?>
    
</body>
</html>