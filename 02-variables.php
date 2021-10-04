<?php
// Déclaration et affectation des variables
$firstName = 'John'; // String
$lastName = 'Doe'; // String
$price = 100.50; // Float
$quantity = 10; // Integer

// Utilisation des variables
// Substitution
echo $firstName.' - '.$lastName;
// Affichez le nom et le prénom dans un titre de niveau 1 (HTML)

// Affichez avec les variables le texte suivant.
// Bonjour John Doe, content de vous revoir.

// Avec l'utilisation des apostrophes (simple quote) les variables doivent être concaténée entres elles ou avec du texte.  On utilise comme symbole le point
echo '<h1>'.$firstName.' '.$lastName.'</h1>';

echo 'Bonjour '.$firstName.' '.$lastName.', content de vous revoir';

echo '<br>';

// Avec l'utilisation des guillemets (double quotes) les variables sont automatiquement remplacées par leur valeur.
echo "Bonjour $firstName $lastName, content de vous revoir";

// A l'aide des variables écrivez le texte suivant: Montant total à payer: 1005 €
echo '<br>';
echo 'Montant total à payer: '.$price * $quantity.' €';
?>
<h1>Site Web</h1>
<h2>Home Page</h2>
<!-- Lors de l'écriture de balises, il est préréfrable de sortir du mode PHP et de se servir de celui-ci uniquement pour la substitution des variables -->
<h3>Auteur: <?php echo $firstName?></h3> <!-- Écriture longue -->
<h3>Auteur: <?= $firstName?></h3> <!-- Short tag -->
