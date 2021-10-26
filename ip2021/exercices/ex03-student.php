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
// A & B
?>
        <a href="?country=es"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Flag_of_Spain.svg/180px-Flag_of_Spain.svg.png" alt="Drapeaux de l'Espagne" width="25px" height="25px"></a>
        <a href="?country=pe"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/cf/Flag_of_Peru.svg/180px-Flag_of_Peru.svg.png" alt="Drapeaux du Pérou" width="25px" height="25px"></a>
        <a href="?country=bo"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/48/Flag_of_Bolivia.svg/176px-Flag_of_Bolivia.svg.png" alt="Drapeaux de la Bolivie" width="25px" height="25px"></a>
        <a href="?country=en"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/be/Flag_of_England.svg/195px-Flag_of_England.svg.png" alt="Drapeaux de l'Engleterre" width="25px" height="25px"></a>
        <a href="?country=de"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/ba/Flag_of_Germany.svg/200px-Flag_of_Germany.svg.png" alt="Drapeaux de l'Allemagne" width="25px" height="25px"></a>
        <a href="?country=au"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/41/Flag_of_Austria.svg/180px-Flag_of_Austria.svg.png" alt="Drapeaux de l'Autriche" width="25px" height="25px"></a>
        <a href="?country=be"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/65/Flag_of_Belgium.svg/139px-Flag_of_Belgium.svg.png" alt="Drapeaux de la Belgique" width="25px" height="25px"></a>
<?php 
// C
if (!isset($_GET['country'])) {
    $_GET['country'] = 'be';
}

if ($_GET['country'] == 'es' || $_GET['country'] == 'pe' || $_GET['country'] == 'bo') {
    require_once 'partials/es-pe-bo.php';
} elseif ($_GET['country'] == 'en') {
    require_once 'partials/en.php';
} elseif ($_GET['country'] == 'de' || $_GET['country'] == 'au') {
    require_once 'partials/de-au.php';
} else {
    require_once 'partials/be.php';
}


require_once '../partials/footer.php';
?>