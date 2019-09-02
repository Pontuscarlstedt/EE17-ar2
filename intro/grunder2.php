<?php
echo "<h1>Vad är datatyper?</h1>";
?>

<?php
$förnamn = "Pontus";
$ålder = 18;

echo "Mitt namn är " . $förnamn . "<br>";
echo "Mitt namn är " . $förnamn . ". Min ålder är " . $ålder . "<br>";

$mobil = "+46768804444";

echo "Mitt namn är " . $förnamn . " Mitt mobilnummer är " . $mobil . "<br>";

echo "Mitt namn är $förnamn Mitt mobilnummer är $mobil <br>";
echo "Mitt namn är $förnamn Mitt mobilnummer är $mobil. \$hej <br>";
echo 'Mitt namn är $förnamn Mitt mobilnummer är $mobil <br>';

$pi = 3.14159;
echo "pi = $pi <br>";

$harKörkort = false;
echo "Har körtkort = $harKörkort";

$ee17 = ["Erik", "Gene", "Carl-axel", "Albin"];

echo "Dessa går i min klass $ee17[2] <br>";
print_r($ee17);
var_dump($ee17)
?>
