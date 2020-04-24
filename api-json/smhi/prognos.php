<?php
/*
* PHP version 7
* @category   
* @author     
* @license    PHP CC
*/
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tempraturprognos från SMHI api</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
<div class="kontainer">
<h1>Tempraturprognos - Stockholm</h1>
<?php 
$url = "https://opendata-download-metfcst.smhi.se/api/category/pmp3g/version/2/geotype/point/lon/18/lat/59/data.json";

$json = file_get_contents($url);

$jsonData = json_decode($json);

$approvedTime = $jsonData->approvedTime;
echo "<p>Prognos publicerades den $approvedTime</p>";

$timeSeries = $jsonData->timeSeries;


foreach ($timeSeries as  $timeData) {

    $validTime = $timeData->validTime;

    $parameters = $timeData->parameters;

    $parameter = $parameters[11];
    $tempraturen = $parameter->values[0];


    echo "<p>$validTime $tempraturen</p>";
}


?>

</div>
    
</body>
</html>