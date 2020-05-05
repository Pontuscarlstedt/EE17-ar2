<?php
$lat = filter_input(INPUT_POST, "lat", FILTER_SANITIZE_STRING);
$lon = filter_input(INPUT_POST, "lon", FILTER_SANITIZE_STRING);

if ($lat && $lon) {
$api = "5a04359da47042b7837f88a5c61908c9";

$radius = 1000;

$max = 25;

$url = "http://api.sl.se/api2/nearbystops.json?key=$api&originCoordLat=$lat&originCoordLong=$lon&maxresults=$max&radius=$radius";

$json = file_get_contents($url);

$jsonData = json_decode($json);

var_dump($jsonData);
} else {
    echo "Något blev fel";
    
}



?>