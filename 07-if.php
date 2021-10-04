<?php 

/*
if (condition) {
    Instruction 01
    Instruction 02
    Instruction 03
}
*/

$age = 16;
if ($age >= 18) {
    echo 'vous pouvez jouer';
}
echo '<br>';
if ($age >= 18) {
    echo 'vous pouvez jouer';
} else {
    echo 'Vous ne pouvez pas jouer';
}

echo '<br>';

// 01 Si l'utilisateur a le rôle Admin, afficher: Partie Administration
// Sinon afficher: Partie Publique
$role = 'admin';

if ($role == 'admin') {
    echo 'Partie Administration <br>';
} else {
    echo 'Partie Publique <br>';
}

?>