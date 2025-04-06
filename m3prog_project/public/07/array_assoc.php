<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Weersvoorspelling</title>
    <link rel="stylesheet" href="../assets/css/array_assoc.css">
</head>
<body>

<table>
    <tr>
        <th>Dag</th>
        <th>Temperatuur</th>
    </tr>

<?php 

$Weersvoorspelling = [
    "Ma" => "12°C",
    "Di" => "13°C",
    "Wo" => "13°C",
    "Do" => "13°C",
    "Vr" => "16°C",
    "Za" => "18°C",
    "Zo" => "19°C"
];

foreach($Weersvoorspelling as $dag => $temperatuur) {
    echo "<tr><td>$dag</td><td>$temperatuur</td></tr>";
}

?>

</table>

<?php
$vandaag = "Ma";
?>

<p>Vandaag <?= $vandaag;?> is het <?= $Weersvoorspelling[$vandaag]; ?> graden</p>
<p>Op Di is het <?= $Weersvoorspelling["Di"]; ?> graden</p>
<p>Op Wo is het <?= $Weersvoorspelling["Wo"]; ?> graden</p>
<p>Op Do is het <?= $Weersvoorspelling["Do"]; ?> graden</p>
<p>Op Vr is het <?= $Weersvoorspelling["Vr"]; ?> graden</p>

</body>
</html>
