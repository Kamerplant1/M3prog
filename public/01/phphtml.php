<?php
$title = "mijn mooie website";
$datum = date("12-10-2025");
$tijd = date("10:00");
$favorieteGame = "Super metroid";
$mooistegetal = 69;
$favorieteShow = "Bleach";
$leuksteStad = "Berlijn";


echo $title;
echo $datum;
echo $tijd;
echo $favorieteGame;
echo $mooistegetal;
?>
<!doctype html>
<html lang="en">
    <head>
        <title><?php echo $title ?></title>
    </head>
    <body>
        <h2>De datum vandaag is: <?php echo $datum?>, en de tijd is <?php echo $tijd?> uur.
        
        <p><h2>Mijn favoriete game</h2><?php echo $favorieteGame?></p>

        <p><h2>de leukste stad:</h2><?php echo $leuksteStad?> </p>

        <p><h2>Mijn favoriete show:</h2><?php echo $favorieteShow?></p>
    </body>
</html>