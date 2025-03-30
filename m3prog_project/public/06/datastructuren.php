<?php
header("Content-Type: application/json");
$film = [
    "The Matrix"=>[
        "beschrijving"=>"Neo, een hacker, ontdekt dat de wereld waarin hij leeft een simulatie is, The Matrix. 
        Hij wordt gerekruteerd door Morpheus en leert dat machines de mensheid onderdrukken. 
        Met de hulp van Trinity en andere rebellen vecht hij tegen de agenten van de Matrix,
        waaronder Agent Smith. Neo omarmt uiteindelijk zijn lot als The One en krijgt bovennatuurlijke krachten binnen de simulatie.",
        "regisseur"=>"Lana & Lilly Wachowski",
        "jaar"=>1999,
        "genre"=>"Actie / Sciencefiction"
    ]
];

$jsonString = json_encode($film);
echo $jsonString;
?>
