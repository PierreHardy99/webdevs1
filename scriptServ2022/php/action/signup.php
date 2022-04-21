<?php

// Evolution : si l'utilisateur est déjà connecté, on redirige vers la page de profil [session]
if (!empty($_SESSION['username'])) {
    header('Location: index.php?view=view/profile');
    die;
}

// On vérifie si tous les champs du formulaire ont été remplis
if (!empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['pwd'])) {
    // Certains serveurs SQL n'acceptent pas NOW() pour un champ datetime, il convient donc de construire la date comme ceci :
    $now = date('Y-m-d H:i:s');
    // Evolution : on insère les données en base de données [pdo]
    $result = $dbh->prepare("INSERT INTO user (username, `password`, email, created, lastlogin) VALUES (?,?,?,?,?)");
    // En DB les mots de passe ne doivent pas apparaitre en clair, on utilisera alors une fonction de cryptage
    $result->execute([$_POST['username'], password_hash($_POST['pwd'], PASSWORD_DEFAULT), $_POST['email'], $now, $now]);
    // on récupère l'id de la dernière ligne insérée, afin de vérifier que l'insert s'est bien exécuté
    $userid = $dbh->lastInsertId();
    if ($userid) {
        // gestion de l'image
        if ($_FILES['image']['tmp_name'] &&
            $_FILES['image']['name'] &&
            ($_FILES['image']['type'] == 'image/png' || $_FILES['image']['type'] == 'image/jpg' || $_FILES['image']['type'] == 'image/jpeg')
        ) {
            $imagepath = __DIR__ . '/../image/profile/';
            if (is_dir($imagepath . $userid) == false) {
                mkdir($imagepath . $userid, 0755);
            }
            $basename = basename($_FILES['image']['name']);
            $move = move_uploaded_file($_FILES['image']['tmp_name'], $imagepath . $userid . '/' . $basename);
            if ($move) {
                $result2 = $dbh->prepare("UPDATE user SET image = :image WHERE id = :userid");
                $result2->bindParam(':image', $basename, 2);
                $result2->bindParam(':userid', $userid, 1);
                $result2->execute();
            }
        }
        echo "Compte utilisateur créé avec succès!";
    } else {
        echo "Erreur lors de la création du compte utilisateur!";
    }
    die;
} else {
    // Sinon, on redirige vers le formulaire
    header('Location: index.php?view=view/signup');
    die;
}