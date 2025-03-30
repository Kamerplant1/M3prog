<?php
function mijnPrint($printText)
{
    print($printText);
    print("<br>");
}
// vraag1 = geen waarde aan gevoegd
mijnPrint("regel 1");
mijnPrint("regel 2");
mijnPrint("regel 3");
mijnPrint("geen waarde aan gevoegd");
mijnPrint($dezeGaatMee);

$dezeGaatMee = "deze waarde wordt meegenomen";
?>