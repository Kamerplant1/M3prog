<?php
$games = ["Darksouls III, Kingdom Hearts, Ghost of Tsushima, Spore, Destiny 2"];
print_r($games);
echo "<br>";
print_r($games[3]);
echo "<br>";
print_r($games[5]);

echo $namen;
print_r($namen);
var_dump($namen);

echo count($games)."<br>";
array_push($games, "Elden ring");

print_r($games);
echo count($games)."<br>";

echo implode('>>', $games);
echo implode("<br>", $games);

sort($games);
echo implode("<br>", $games);
?>