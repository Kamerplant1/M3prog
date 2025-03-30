<?php
function mijnFunction()
{
    return 1;
}
$mijnFunctionResultaat = mijnFunction();
echo $mijnFunctionResultaat;

echo "<br>";
function returnVariable()
{
    $result = rand();
    return $result;
}
echo "<br>";
returnVariable();
echo "<br>";
returnVariable();
echo "<br>";
returnVariable();
?>