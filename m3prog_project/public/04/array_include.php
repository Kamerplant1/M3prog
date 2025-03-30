<?php
$announcements = [
    "a.html",
    "b.html",
    "c.html",
    "d.html",
    "e.html"

];
$reviews = [
    ["demon's souls",10, "overall very good game"],
    ["mario wonder",9.5 "good but has some bugs"],
    ["mega man 2",8.0 "nice game but gets boring"],
]
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $announcement= $announcements[$i];
    include "announcements/$announcement";

    $review= $reviews[$i];
    $title = $review[0];
    $cijfer = review[1];
    ?>
</body>
</html>