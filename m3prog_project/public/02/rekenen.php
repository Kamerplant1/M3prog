<?php
$getal = 3.14159;
$afgerond = ceil($getal);

$getal2 = 3.14159;
$afgerond2 = floor($getal2); 

$random1 = rand(1,100);
$random2 = rand(1,100);
$random3 = rand(1,100);

$UitslagSom1 = $random1 + $random2;
$UitslagSom2 = $UitslagSom1 / $random3;
 
echo $UitslagSom2;




echo $afgerond;
echo $afgerond2;
?>
