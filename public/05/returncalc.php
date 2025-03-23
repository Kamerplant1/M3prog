<?php
function add($getal1, $getal2){
    $som = $getal1 + $getal2;
    return $som;
}
echo add(100,100);
echo add(4,9);
echo add(33,33);

function add($getal1, $getal2) {
    $som = $getal1 + $getal2;
    return $som;
}

function subtract($getal1, $getal2) {
    $verschil = $getal1 - $getal2;
    return $verschil;
}

function divide($getal1, $getal2) {
    if ($getal2 != 0) {
        $quotient = $getal1 / $getal2;
        return $quotient;
    }
}

function multiply($getal1, $getal2) {
    $product = $getal1 * $getal2;
    return $product;
}

//echo add(10, 5) . "<br>";

//echo subtract(10, 5) . "<br>";

//echo divide(10, 5) . "<br>";

//echo multiply(10, 5) . "<br>";
?>

