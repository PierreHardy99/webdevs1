<?php 

    require 'partials/settings.php';
    $price = 100;

    // Utilisation des constances
    echo 'Nom de la base de données: '.DB_CLIENT;
    echo '<br>';
    echo 'Réduction: '.$price * DISCOUNT.' €';

    // Une constance ne peut jamais être redéfinie
    // define('DISCOUNT',0.20); Warning: Constant DISCOUNT already defined
?>