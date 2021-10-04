<?php
// Inclusion de fichiers avec l'instruction include (si erreur interprétation du code PHP)

// include 'partials/headers.php';

// Inclusion de fichiers avec l'instruction require (si erreur l'exécution du script est arrêtée)

require_once 'partials/header.php';

// commentaire sur une ligne

/* 
commentaire
sur plusieurs lignes
*/


// Output (sorties dans le navigateur)
// String
// Délimiteurs simples VS délimiteurs doubles
echo 'Intitiation à la programmation';
echo '<h1>Principes de base</h1>';
echo "L'instruction echo";
echo "<br>"; // saut de ligne en HTML
echo 'L\'instruction echo'; // échappement du caratère apostrophe pour éviter la fin de la chaîne délimitée par un guillement simple
echo "<br>";
echo "Descartes a dit \"je pense donc je suis\"";//échappement du caratère guillemet pour éviter la fin de la chaîne délimitée par des guillemets doubles
// Valeurs numériques
echo "<br>";
echo 1000;
echo "<br>";
// Calculs
// opréateurs mathématiques
echo 50 + 10; 
echo "<br>";
echo 10 * 3;
echo "<br>";
echo '10 * 3'; // retourne la chaine et ne calcule pas
echo "<br>";
echo 20 / 4;
echo "<br>";
echo 21 % 2; // Modulo
echo "<br>";
echo 21 ** 2; // Puissance
echo "<br>";

// L'instruction print permet également d'afficher des contenus
print 'Introduction';
print '<br>';
print('La fonction print');

require 'partials/footer.php';