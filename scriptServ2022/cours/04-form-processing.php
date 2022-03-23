<?php
// si tous les champs de formulaire sont remplis écrivez les données vont être ajoutées dans la DB sinon remplissez tous les champs

if (isset($_POST['name']) && !empty($_POST['name']) && !empty($_POST['job']) && !empty($_POST['birth'])) {
    echo '<p>les données vont être ajoutées dans la DB<br>Redirection dans 3 secondes</p>';
    header('refresh:3;url=03-form-post.php');
    exit();
} else {
    echo '<p>remplissez tous les champs<br>Redirection dans 3 secondes</p>';
    header('refresh:3;url=03-form-post.php');
    exit();
}

