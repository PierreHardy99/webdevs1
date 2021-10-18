<?php
// SIGNATURES
/*
if(condition) {
	Instruction 01
	Instruction 02
	Instruction 03
}
*/

/*
if(condition) {
	Instruction 01
	...
} else {
	Instruction 02
}
*/

/* 
if(condition 01) {
	Instruction 01
} elseif(condition 02) {
	Instruction 02
} elseif(condition 03) {
	Instruction 03
} else {
	Instruction 04
}
*/

// Exemples
$age = 16;
if($age >= 18) {
	echo 'Vous pouvez jouer';
}
echo '<br>';
if($age >= 18) {
	echo 'Vous pouvez jouer';
} else {
	echo 'Vous ne pouvez pas jouer';
}

// 01 
// Si l'utilisateur a le rôle Admin, affichez: Partie Administration
//    Sinon affichez: Partie Publique
// Utilisez la variable role

echo '<br>';
$role = 'admin';
if($role == 'Admin') {
	echo 'Partie Administration';
} else {
	echo 'Partie Publique';
}
echo '<br>';

// 02
// Affichez une catégorie en fonction d'une tranche d'âge
// >= 60 => Senior
// >= 40 => Vétéran
// >= 18 => Jeune adulte
// Sinon => Junior

$old = 70;
if($old >= 60) {
	echo 'Senior';
} elseif($old >= 40) {
	echo 'Vétéran';
} elseif($old >= 18) {
	echo 'Jeune adulte';
} else {
	echo 'Junior';
}
echo '<br>';

// 03
// En fonction du montant des achats calculez une remise conditionnelle
// Si MA > 1000 => 30%
// Si MA >  700 => 20%
// Si MA >  500 => 10%
// Sinon        =>  5%

// Version avec répétitions
$ma = 10000;
if($ma > 1000) {
	echo 'Remise: '.$ma * 30 / 100;
} elseif($ma > 700) {
	echo 'Remise: '.$ma * 20 / 100;
} elseif($ma > 500) {
	echo 'Remise: '.$ma * 10 / 100;
} else {
	echo 'Remise: '.$ma * 5 / 100;
}

// Version optimisée
// Le taux de la remise est enregistré pour chaque condition dans la même variable (DRY)

if ($ma > 1000) {
	$discount = 0.30;
} elseif ($ma > 700) {
	$discount = 0.20;
} elseif ($ma > 500) {
	$discount = 0.10;
} else {
	$discount = 0.05;
}
echo '<br>';
echo 'Remise : '.$ma * $discount;
echo '<br>';

// 04
// Le visiteur aura accès au site si son âge est supérieur ou égal à 18 et s'il est authentifié
$age = 18;
$auth = true;
if ($age >= 18 && $auth == true) {
	echo 'Accès au site';
}

// On peut simplifier le test sur un booléen en indiquant seulement le nom de la variable pour true et !nom pour la variable pour false
if ($age >= 18 && $auth) {
	echo 'Accès au site';
}
echo '<br>';

$presence = 10;
$point = 60;
// 5)
// En fonction des présences de l'étudiant (>=10) affichez le grade obtenu
// point >= 80 	PGD
// point >= 70 	GD
// point >= 60 	D
// point >= 50 	S
// sinon:		Refusé
echo '<br>';
if ($presence >= 10) {
	if ($point >= 80) {
		$note = 'PGD';
	} elseif ($point >= 70) {
		$note = 'GD';
	} elseif ($point >= 60) {
		$note = 'D';
	} elseif ($point >= 50) {
		$note = 'S';
	} else {
		$note = 'Refusé';
	}

	echo 'Votre grade est: '.$note;
} else {
	echo 'Trop d\'absences... Abandon';
}
echo '<br>';