<?php
// Déclaration des variables
$a = 10;
$b = 5;
$c = 2;
$firstName = 'John';
$lastName = 'Doe';

// Concaténation de variables
$name = $firstName.' '.$lastName; // John Doe
$b += $a; // Affectation combinée (on ajoute la val de la var $a a celle de $b) 15
$b -= $a; // 5
echo $a * $b;
echo '<br>';
echo $b % 2; // Modulo
echo '<br>';
echo $b ** $c; // Exposant
$lastName = 'Lambert'; // Réafectation
