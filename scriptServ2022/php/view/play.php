<?php
    //var_dump(get_defined_vars());
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Play</title>
</head>
<body>
    <form action="./action/rand.php" method="post">
        <div>
            <label for="rand">Choississez un nombre random</label>
            <select name="rand">
                <?= $options ?>
            </select>
        </div>
        <div>
            <input type="submit" value="jouer">
        </div>
    </form>

</body>
</html>