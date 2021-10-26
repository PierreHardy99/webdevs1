<?php

/////// EXERCICE 01 ///////
/* 
A l'aide des trois variables, écrivez en php la ligne suivante. Utilisez un seul echo et la syntaxe des simples quotes (').
Sur les 10 produits achetés, le client en retourne 3. Il en a au final acheté 7 pour un montant de 700€
*/

$quantite = 10;
$prix = 100;
$retour = 3;

echo 'Sur les '.$quantite.' produits achetés, le client en retourne '.$retour.'. Il en a au final acheté '.($quantite - $retour).' pour un montant de '.($quantite - $retour) * $prix.'€';
echo '<hr>';

/////// EXERCICE 02 ///////
/*
Si la variable n'est pas vide, modifiez son type en nombre à décimales
*/

$number = 12;

if (!empty($number)) {
	settype($number, 'float');
	var_dump($number);
}




echo '<hr>';

/////// EXERCICE 03 ///////
/* 
Testez si les deux variables sont de même type.  Dans ce cas affichez: 'les variables sont de type identique'.  Sinon affichez 'Les variables ne sont pas de même type'. 
Après l'affichage, détruisez les variables.
*/

$val01 = '12';
$val02 = 12;

if (gettype($val01) == gettype($val02)) {
	echo 'les variables sont de type identique';
} else {
	echo 'Les variables ne sont pas de même type';
}

unset($val01,$val02);


echo '<hr>';

/////// EXERCICE 04 ///////
/*
A l'aide d'une boucle, affichez une table de multiplication dont le deuxième nombre peut être modifié dans une variable.
Ex: 
1 X 5 = 5		1 X 8 = 8
2 X 5 = 10		2 X 8 = 16
...
*/

$table = 5;

for ($i=1; $i <= 10; $i++) { 
	echo $i.' X '.$table.' = '.$i*$table.'<br>';
}

echo '<hr>';

/////// EXERCICE 05 ///////
/*
Créez un tableau associatif contenant des étudiants et leur pourcentage:
	- John Doe 85 
	- Alice Jennings 70
	- Steve James 40
	- Jane Doe 88
	- Laura Foller 35

En sortant du PHP et en ulisant le HTML
5.1) Affichez le nombre d'étudiants
5.2) Affichez le total des notes
5.3) Affichez la moyenne des notes
5.4) Affichez la moins bonne note

5.4) Triez le tableau sur les pourcentages du petit au plus grand et affichez toutes les données du tableau.

5.5) Ajoutez dans le script un nouvel étudiant.

5.6) Affichez une nouvelle fois le tableau mais uniquement pour les étudiants dont le pourcentage est compris entre 80 et 90%.  Le nouvel étudiant doit apparaître.
*/

$student = ['John Doe' => 85, 'Alice Jennings' => 70, 'Steve James' => 80, 'Jane Doe' => 88, 'Laura Foller' => 35];
?>

<p>Le nombre d'étudiant est de : <?php echo count($student)?></p>
<p>Le total des notes est de : <?php echo array_sum($student)?></p>
<p>La moyenne des notes est de : <?php echo array_sum($student) / count($student)?></p>
<p>La moins bonne note est : <?php echo min($student)?></p>

<?php 
	asort($student);
	foreach ($student as $name => $percent) {
		echo $name.' '.$percent.' %<br>';
	}
	
	echo '<br>';

	
	$student['Wallace Byfrost'] = 84;
	asort($student);

	foreach ($student as $name => $percent) {
		if ($percent >= 80 && $percent <= 90) {
			echo $name.' '.$percent.' %<br>';
		}
	}


?>

