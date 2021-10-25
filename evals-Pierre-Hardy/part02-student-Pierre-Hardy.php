<?php
/*
EXERCICE SUR LES EXTENSIONS DES DOMAINES
A l'aide d'un tableau associatif et d'une boucle, créez un menu avec les pays suivants: Belgique (be), Chine (cn), Egypte (eg), Allemagne (de), Kenya (ke) et France (fr)
Lorsqu'on clique sur un lien du menu, un script affiche à quel continent appartient l'extension du pays (code iso).
Exemples: 
	be est une extension européenne
	ke est une extension africaine
	...
Par défaut, on affiche 'Sélectionnez votre pays'
Si l'extension ne correspond pas à un pays du menu, on affiche ... est une extension non répertoriée.
 */


$pays = ['Belgique' => 'be', 'Chine' => 'cn', 'Egypte' => 'eg', 'Allemagne' => 'de', 'Kenya' => 'ke', 'France' => 'fr'];

foreach ($pays as $nom => $iso) {
	echo '<a href="?iso='.$iso.'">'.$nom.'</a> ';
}

if (isset($_GET['iso'])) {
	if ($_GET['iso'] == 'be' || $_GET['iso'] == 'de' || $_GET['iso'] == 'fr') {
		echo '<p>'.$_GET['iso'].' est une extention européenne</p>';
	} elseif ($_GET['iso'] == 'ke' || $_GET['iso'] == 'eg') {
		echo '<p>'.$_GET['iso'].' est une extention africaine</p>';
	} elseif ($_GET['iso'] == 'cn') {
		echo '<p>'.$_GET['iso'].' est une extention asiatique</p>';
	} else {
		echo '<p>'.$_GET['iso'].' est une extension non répertoriée</p>';
	}
} else {
	echo '<p>Sélectionnez votre pays</p>';
}

