<?php

/*
1)
A l'aide des variables suivantes affichez en PHP le texte ci-dessous:
Vous êtes inscrit dans la section WebDev pour une durée de 1250 périodes.
Montant à payer 250€
*/

$periods = 1250;
$section = 'WebDev';
$pricePeriod = 0.20;

echo '<p>Vous êtes inscrit dans la section '.$section.' pour une durée de '.$periods.' périodes</p>';
echo '<p>Montant à payer '.$pricePeriod * $periods.' €</p>';

/*
2)
A l'aide de deux variables calculez l'aire d'un rectangle
exemple:
Aire d'un rectangle de 10M sur 5M = 50M2
*/
$length = 10;
$height = 5;
echo '<p>Aire d\'un rectangle de '.$length.'M sur '.$height.'M = '.$length * $height.'M2</p>';

/*
3)
Sur base des deux variables faites en sorte d'ajouter à la variable b le contenu de la variable a
*/

$a = 'jours';
$b = 10;

$b .= ' '.$a;
echo '<p>'.$b.'<p>';

/*
4)
Si la variable est de type string, changer son type en tableau et afficher son contenu ainsi que son nouveau type.
*/

$var = 'HTML';
if (is_string($var)) {
    settype($var, 'array');
    echo '<p>La variable contient: '.$var[0].' et est de type '.gettype($var).'</p>';
}



/*
5)
Si la variable name est vide ou contient un espace affichez "Renseignez votre nom" sinom "Votre nom est..."
*/

$name = ' ';

if (empty($name) || $name == ' ') {
    echo '<p>Rensignez votre nom !</p>';
} else {
    echo '<p>Votre nom est '.$name.'</p>';
}


/*
6)
A l'aide de deux constantes, l'une pour la tva (21%) et l'autre pour la devise (€) et d'une variable pour le prix réalisez le script suivant.  Si la devise est en euro calculez le montant de la TVA sinon affichez "Pour le calcul, la devise doit être en euro."
*/

DEFINE('TVA',0.21);
DEFINE('DEVICE','€');
$price = 1000;
if (DEVICE == '€') {
    echo '<p>TVA : '.($price * TVA).' '.DEVICE.'</p>';
} else {
    echo '<p>Pour le calcul, la device doit être en euro</p>';
}

?>