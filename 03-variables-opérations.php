<?php 
    // Déclaration des variables
    $a = 10;
    $b = 6;
    $c = 2;
    $firstName = 'John';
    $lastName = 'Doe';

    // Concaténation
    $name = $firstName.' '.$lastName; // John Doe
    $b += $a; // Affectation combiné (On ajoute la valeur de la variable $a à celle de $b) 15
    $b -= $a; // 10
    echo $a * $b;
    echo '<br>';
    echo $b % 2; // Modulo
    echo '<br>';
    echo $b ** $c; // Exposant
    $lastName = 'Lambert'; // réaffectation
?>