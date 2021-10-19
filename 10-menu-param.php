<?php 
    require_once 'partials/header.php';
?>

<a href="?page=home">Home</a>
<a href="?page=about">About Us</a>
<a href="?page=gallery">Our gallery</a>
<a href="?page=contact">Contact us</a>



<?php
    // Tester l'existence du paramètre
    // Lors du premier accès le param 'page' n'existe pas alors qu'il est testé dans le code => erreur PHP
    if (!isset($_GET['page'])) {
        $_GET['page'] = 'home';
    }


    if ($_GET['page'] == 'about') {
        echo '<h2>About us</h2>';
    } elseif ($_GET['page'] == 'gallery') {
        echo '<h2>Gallerie photos</h2>';
    } elseif ($_GET['page'] == 'contact') {
        echo '<h2>Formulaire de contact</h2>';
    } else {
        echo '<h2>Page d\'accueil</h2>';
    }

    require_once 'partials/footer.php';
?>