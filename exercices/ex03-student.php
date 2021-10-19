<?php 
/* CONDITIONNELLE & PARAMÉTRES
A) Créer un menu de pays permettant au visiteurs de choisir une traduction suivant la langue du pays.

B) Utilisez les liens pour les langues suivantes: Espagne, Perou, Bolivie, Angleterre, Allemagne, Autriche et Belgique

C) En fonction du code iso du pays, affichez le texte suivant
es ou pe ou bo => Bienvenido a nuestro sitio web
en => Welcome to our website
de ou au => Willkommen auf unserer Webseite
sinon Bienvenue sur notre site Web
*/

require_once '../partials/header.php';
// A
?>
    <a href="?country=es"></a>
    <a href="?country=pe"></a>
    <a href="?country=bo"></a>
    <a href="?country=en"></a>
    <a href="?country=de"></a>
    <a href="?country=au"></a>
    <a href="?country=fr"></a>
<?php 
require_once '../partials/footer.php';
?>