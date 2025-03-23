<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="M3prog\m3prog_project\public\assets\css\style.css">
</head>
<body>
    <?php
    $pokemons = ["Pikachu", "Bulbasaur","Charizard","Squirtle","jigglypuff"];
    $images = [
        "https://assets.pokemon.com/assets/cms2/img/pokedex/full/025.png", // Pikachu
        "https://assets.pokemon.com/assets/cms2/img/pokedex/full/001.png", // Bulbasaur
        "https://assets.pokemon.com/assets/cms2/img/pokedex/full/004.png", // Charmander
        "https://assets.pokemon.com/assets/cms2/img/pokedex/full/007.png", // Squirtle
        "https://assets.pokemon.com/assets/cms2/img/pokedex/full/039.png"  // Jigglypuff
    ];
    for ($i = 0; $i < count($pokemons); $i++) {
        echo "<h1>" . $pokemons[$i] . "</h1>";  
        echo "<img src='" . $images[$i] . "' alt='" . $pokemons[$i] . "'>";  
    }
    ?>
</body>
</html>