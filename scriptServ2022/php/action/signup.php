<?php

<<<<<<< HEAD
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
=======
    if (isset($_POST['user']) && !empty($_POST['password'])){
        $_SESSION['user']['login'] = $_POST['user'];
        $_SESSION['user']['password'] = hash('sha256',$_POST['password']);
        if (isset($_POST['name']) && !empty($_POST['name'])){
            $_SESSION['user']['name'] = $_POST['name'];
        }
        if (isset($_POST['firstname']) && !empty($_POST['firstname'])){
            $_SESSION['user']['firstname'] = $_POST['firstname'];
        }
         header('Location: index.php?view=login&succes=Enregistrement r%C3%A9ussi. Veuillez vous connectez');
        exit();

    } else {
        header('Location: index.php?view=signup&error=Veuillez compl%C3%A9ter le login et le mot de passe');
        exit();

    }
?>
>>>>>>> c0d620a3ab918a4c4fcf4b691a9ac2302793c5cd
