<?php
$persoon = [
    'voornaam' => 'Luigi',
    'achternaam' => 'Mario',
    'leeftijd' => 19,
    'woonplaats' => 'Mushroom Kingdom',
    'favoriete eten' => 'Pasta',
    'minst favoriete eten' => 'Paddenstoelen'
];

echo "<table>";
foreach($persoon as $key => $value) {
    echo "<tr><td>$key</td><td>$value</td></tr>";
}
echo "</table>";
?>
