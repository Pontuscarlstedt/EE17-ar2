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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
    <link rel="stylesheet" href="./prognos.css">
</head>
<body>
<div class="kontainer">
<h1>Tempraturprognos - Stockholm</h1>
<canvas id="myChart" width="400" height="200"></canvas>
<?php 
$url = "https://opendata-download-metfcst.smhi.se/api/category/pmp3g/version/2/geotype/point/lon/18/lat/59/data.json";

$json = file_get_contents($url);

$jsonData = json_decode($json);

$approvedTime = $jsonData->approvedTime;
echo "<p>Prognos publicerades den $approvedTime</p>";

$timeSeries = $jsonData->timeSeries;

$tiderData = "";
$tempData = "";

foreach ($timeSeries as  $timeData) {

    $validTime = $timeData->validTime;

    $parameters = $timeData->parameters;

    $parameter = $parameters[11];
    $tempraturen = $parameter->values[0];

    $datumDelen = substr($validTime, 0, 10);

    $pos = strpos($tiderData, $datumDelen);

    if ($pos === false) {
            $tiderData .= "'$datumDelen', ";
    }else {
        $tiderData .= "'', ";
    }

    $tempData .= "'$tempraturen', ";
  
}


echo  "<script>
var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: [$tiderData],
        datasets: [{
            label: '# of Votes',
            data: [$tempData],
            backgroundColor: [
                'rgba(173, 216, 230, 0.3)'
            ],
            borderColor: [
                'blue'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
</script>";


?>

</div>
    
</body>
</html>