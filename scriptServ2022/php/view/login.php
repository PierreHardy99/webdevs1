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
    <form action="index.php?action=login" method="post">
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