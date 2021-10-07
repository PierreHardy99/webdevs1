<?php
require 'partials/settings.php';
$price = 100;

// Utilisation des constantes
echo 'Nom de la base de données: '.DB_CLIENT;
echo '<br>';
echo 'Réduction: '.$price * DISCOUNT.'€';
echo '<br>';

// Une constante ne peut jamais être redéfinie
// define('DISCOUNT', 0.20); // Warning: Constant DISCOUNT already defined

echo 'La constante DISOUNT est de type '.gettype(DISCOUNT);
// Les fonctions sur les avariables peuvent aussi être utilisées sur les constantes sauf settype() évidemment