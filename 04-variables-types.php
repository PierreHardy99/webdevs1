<?php 
    // Les types de variables
    $country = 'Belgique'; // String
    $population = 11658000; // Integer
    $growth = 1.15; // Float
    $eu = true; // Bolean
    $governement = null; // Type null
    $languages = ['Français','Allemand','Néerlandais','Anglais']; // Array (tableau)
    $langues = 'Français, Allemand, Néerlandais, Anglais';

    // Afficher certaines variables

    echo $eu; // 1
    echo '<br>';
    echo $governement; // n'affiche rien
    echo '<br>';
    echo $languages[0];
    echo '<br>';
    echo $languages[1];
    echo '<br>';
    echo $langues;
    echo '<br>';
    echo count($languages); // La fonction count() compte le nombre d'élements d'un array
    echo '<br>';
    // echo count($langues); Fatal error
?>