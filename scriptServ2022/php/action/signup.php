<?php

// Evolution : si l'utilisateur est déjà connecté, on redirige vers la page de profil [session]
if (!empty($_SESSION['username'])) {
    header('Location: index.php?view=view/profile');
    die;
}

// On vérifie si tous les champs du formulaire ont été remplis
if (!empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['pwd'])) {
    // Evolution : on insère les données en base de données [pdo]
} else {
    // Sinon, on redirige vers le formulaire
    header('Location: index.php?view=view/signup');
    die;
}