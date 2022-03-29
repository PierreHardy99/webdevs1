<<<<<<< HEAD
<?php
/**
 * Il convient de vérifier si l'utilisateur est connecté. Pour ce faire, on vérifie simplement si la variable de session existe
 * Il n'est pas utile d'ajouter le session_start ou l'include de session ici, car ce script est appelé depuis index.php qui le contient déjà
 */

if (!empty($_SESSION['username'])) {
    echo 'Hello ' . $_SESSION['username'];
} else {
    header('Location: index.php?view=view/login');
    die;
}
=======
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Profile</title>
</head>
<body>
    <?php
        if (isset($_SESSION['connected']) != true){
            header('Location: index.php?view=login');
        }
    ?>
    <h1>Bonjour <?php echo $_SESSION['user']['login']?></h1>
    <h2>Information sur vous:</h2>
    <p>nom: <?php if (isset($_SESSION['user']['name'])) {
        echo $_SESSION['user']['name'];
    } else {
        echo '/';
    } ?>
    </p>
    <p>Prénom: <?php if (isset($_SESSION['user']['firstname'])) {
            echo $_SESSION['user']['firstname'];
        } else {
            echo '/';
        } ?>
    </p>
</body>
</html>
>>>>>>> c0d620a3ab918a4c4fcf4b691a9ac2302793c5cd
