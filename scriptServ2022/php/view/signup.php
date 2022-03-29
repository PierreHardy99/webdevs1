<<<<<<< HEAD
<?php

// On affiche le formulaire de création de compte
require_once __DIR__ . '/../form/f_signup.php';
=======
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Inscription</title>
</head>
<body>
    <?php
        if (isset($_GET['succes'])){
            echo '<h1>'.$_GET['succes'].'</h1>';
        } elseif (isset($_GET['error'])) {
            echo '<h1>'.$_GET['error'].'</h1>';
        }
    ?>
    <form action="index.php?view=action/signup" method="post">
        <div>
            <label for="name">Nom</label>
            <input type="text" name="name">
        </div>
        <div>
            <label for="firstname">Prénom</label>
            <input type="text" name="firstname">
        </div>
        <div>
            <label for="user">Pseudo</label>
            <input type="text" name="user" required>
        </div>
        <div>
            <label for="password">Mot de passe</label>
            <input type="password" name="password" required>
        </div>
        <div>
            <input type="submit" value="S'enregistrer">
        </div>
    </form>
</body>
</html>
>>>>>>> c0d620a3ab918a4c4fcf4b691a9ac2302793c5cd
