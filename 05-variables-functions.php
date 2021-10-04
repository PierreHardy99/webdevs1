<?php
// Quelques fonctions sur les variables
// Fonctions natives

$name = 'John Doe';
$connect = false;
$val = 20.5;
$teachers = ['John',15, 'Pierre',true];
$childs = 4;

// gettype() Retourne le type de la variable
echo gettype($teachers); // Array
echo '<br>';
echo gettype($val); // Double | Float

// settype() Modifie le type de la variable (transtyper)
// Liste des valeurs acceptées: boolean, integer, float, string, array, null,...
settype($childs, 'string');
echo '<br>';
echo gettype($childs); // String
echo '<br>';

// Les fonctions is...
if (is_array($teachers)) {
    echo 'La variable est de type tableau';
}
// Idem mais avec gettype + test d'égalité sur le type
echo '<br>';
if (gettype($teachers) == 'array') {
    echo 'La variable est de type tableau';
}

// Empty() vérifie si une variable est vide
echo '<br>';
echo empty($name);
echo '<br>';

if (empty($name)) {
    echo 'Le nom est obligatoire';
} 
echo '<br>Suite de la page';

echo '<br>';

// isset() Vérifie si al variable existe (définie)
if (isset($price)) {
    echo 'la variable a été déclarée';
}
echo '<br>';

// Opérateur d'invertion (contraire) ! = not
if (!isset($price)) {
    echo 'La variable n\'existe pas';
}
echo '<br>';

// unset() Supprime une variable
unset($val);
// echo $val; Warning: Underined variable $val

// var_dump() Affiche le contenu et les informations d'une variable: fonction pour débuguer pas pour afficher dans le client

var_dump($teachers);

?>