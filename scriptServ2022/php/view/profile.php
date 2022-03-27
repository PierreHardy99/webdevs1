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