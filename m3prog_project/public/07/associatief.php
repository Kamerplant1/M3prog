<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php
$verbruik = [
    "Wasmachine" => 1.5,
    "Koelkast" => 0.3,
    "Televisie" => 0.2,
    "Stofzuiger" => 0.75,
    "Magnetron" => 1.2
];

echo "<ul>";
foreach ($verbruik as $apparaat => $verbruik_kwh) {
    echo "<li><strong>$apparaat</strong>: $verbruik_kwh kWh</li>";
}
echo "</ul>";
?>

<?php
$totaal = 0;

foreach ($verbruik as $apparaat => $verbruik_kwh) {
    $totaal += $verbruik_kwh;
}

echo "<p><strong>Het totaal verbruik van de apparaten is:</strong> $totaal kWh</p>";
echo "<br><h1><strong>Dat is bomboclat weinig</strong></h1>";
?>

</body>
</html>
