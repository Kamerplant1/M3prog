<?php
$winkel = '{
  "winkel": {
    "producten": [
      {
        "productNaam": "Laptop",
        "details": {
          "prijs": 999.99,
          "voorraad": 50
        }
      },
      {
        "productNaam": "Smartphone",
        "details": {
          "prijs": 699.99,
          "voorraad": 100
        }
      }
    ]
  }
}';

$winkelObj = json_decode($winkel);

echo "Prijs van de Smartphone: €" . "<br>" . $winkelObj->winkel->producten[1]->details->prijs . "<br>";
echo "Voorraad van de Laptop: " . "<br>" .  $winkelObj->winkel->producten[0]->details->voorraad;
?>
