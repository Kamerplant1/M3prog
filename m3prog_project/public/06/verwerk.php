<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $stad = $_POST['stad'];
    $datum = $_POST['datum'];
    $weertype = $_POST['weertype'];
}
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingevoerde Gegevens</title>
    <link rel="stylesheet" href="../../assets\css\style_POST.css">
</head>
<body>
    <div class="container">
        <h1>Ingevoerde Gegevens</h1>
        <p>Stad: <?php echo $stad; ?></p>
        <p>Datum: <?php echo $datum; ?></p>
        <p>Weertype: <?php echo $weertype; ?></p>
    </div>
</body>
</html>

