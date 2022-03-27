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
    <form action="action/signup.php" method="post">
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