<?php
// Quelques fonctions sur les variables
// Fonctions natives

$name = 'John Doe';
$connect = false;
$val = 20.5;
$teachers = ['John', 'Dominique', 'Pierre'];
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

?>