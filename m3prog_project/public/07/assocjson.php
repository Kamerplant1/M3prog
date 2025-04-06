<?php
$verbruik = [
    "Wasmachine" => 1.5,
    "Koelkast" => 0.3,
    "Televisie" => 0.2,
    "Stofzuiger" => 0.75,
    "Magnetron" => 1.2
];

$Weersvoorspelling = [
    "Ma" => 12,
    "Di" => 13,
    "Wo" => 13,
    "Do" => 13,
    "Vr" => 16,
    "Za" => 18,
    "Zo" => 19
];

$trophiesPerGame = [
    "Demon's souls" => 11,
    "Mario wonder" => 0,
    "Rayman Origins" => 9,
    "tetris" => 12
];

$persoon = [
    'voornaam' => 'Luigi',
    'achternaam' => 'Mario',
    'leeftijd' => 19,
    'woonplaats' => 'Mushroom Kingdom',
    'favoriete eten' => 'Pasta',
    'minst favoriete eten' => 'Paddenstoelen'
];


$jsonArray = [
    $trophiesPerGame,
    $persoon,
    $Weersvoorspelling,
    $verbruik
];
$json = json_encode($jsonArray);
echo $json;

header("Content-Type: application/json");



?>