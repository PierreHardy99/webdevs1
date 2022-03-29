<<<<<<< HEAD
<?php

// On vérifie si l'utilisateur est connecté. [session]
if (!empty($_SESSION['username'])) {
    // Si l'utilisateur est connecté, on affiche le formulaire de déconnexion
    require_once __DIR__ . '/../form/f_delog.php';
} else {
    // Si l'utilisateur n'est pas connecté, on affiche le formulaire de login
    require_once __DIR__ . '/../form/f_login.php';
}
=======
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <?php
        var_dump($_SESSION);
        if (isset($_GET['succes'])){
            echo '<h1>'.$_GET['succes'].'</h1>';
        } elseif (isset($_GET['error'])) {
            echo '<h1>'.$_GET['error'].'</h1>';
        }
    ?>
    <form action="index.php?view=action/login" method="post">
        <div>
            <label for="user">Pseudo</label>
            <input type="text" name="user" required>
        </div>
        <div>
            <label for="password">Mot de passe</label>
            <input type="password" name="password" required>
        </div>
        <div>
            <input type="submit" value="Se connecter">
        </div>
    </form>
</body>
</html>
>>>>>>> c0d620a3ab918a4c4fcf4b691a9ac2302793c5cd
