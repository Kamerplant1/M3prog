<?php

$voorspelling = [
    "maandag" => 20,
    "dinsdag" => 21,
    "woensdag" => 29,
    "donderdag" => 19,
    "vrijdag" => 24,
    "zaterdag" => 22,
    "zondag" => 23
];

$weer_iconen = [
    "maandag" => "../assets/images/cloud.png",
    "dinsdag" => "../assets/images/rain.png",
    "woensdag" => "../assets/images/snow.png",
    "donderdag" => "../assets/images/sun.png",
    "vrijdag" => "../assets/images/thunder.png",
    "zaterdag" => "../assets/images/snow.png",
    "zondag" => "../assets/images/rain.png"
];

function celsiusNaarFahrenheit($celsius) {
    return ($celsius * 9/5) + 32;
}

if (isset($_GET["dag"])) {
    $dag = $_GET["dag"];
    
    if (isset($voorspelling[$dag])) {
        $temp_celsius = $voorspelling[$dag];
        $temp_fahrenheit = celsiusNaarFahrenheit($temp_celsius);
        $icon_url = $weer_iconen[$dag];
        echo "<h2>Weer op " . $dag . "</h2>";
        echo "<img src='" . $icon_url . "' alt='Weer icoon'>";
        echo "<p>Temperatuur: " . $temp_celsius . "°C / " . $temp_fahrenheit . "°F</p>";
    }
}

?>
 <!DOCTYPE html>
 <html lang="nl">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weersverwachting</title>
 </head>
 <body>
    <style>
            body {
                    font-family: Arial, sans-serif;
                    background-color: #e0f7fa;
                    color: #333;
                    margin: 0;
                    padding: 0;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    flex-direction: column;
                    height: 100vh;
                }
    </style>
 </body>
 </html>
