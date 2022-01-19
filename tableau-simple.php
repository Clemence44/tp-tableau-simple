<?php

    session_start();

    if(!isset($_SESSION["pair_random_numbers"])){

    // 1- Créer un tableau d’entier allant de 0 à 41 en PHP en une seule ligne
    $numbers = range(0, 41);

    // 2- Mélanger ce tableau
    shuffle($numbers);

    // 3- Créer un tableau de 16 entiers aléatoires à partir de l’ETAPE 2 en une ligne en PHP
    $random_numbers = array_slice($numbers, 0, 16);

    //4- Créer un tableau de 32 paires d’entiers aléatoires à partir de l’ETAPE 3 en une ligne en PHP
    $pair_random_numbers = array_merge($random_numbers, $random_numbers);

    //5- Mélanger ce tableau de 32 lignes
    shuffle($pair_random_numbers);

    //6- Parcourir ce tableau pour afficher les images (ex:1.jpg)
        $_SESSION["pair_random_numbers"] = $pair_random_numbers;

        //-> jeux.php

    // ...suite
        $_SESSION["tuile"] = ["number" => -1, "index" => 0];
        //-> tableau-simple2.php

}

?>