<?php

if (!empty($_POST['email'])) {
    $_POST = validDataType($_POST);
    $result3 = $dbh->prepare("UPDATE user SET email = ? WHERE username = ?");
    $result3->execute([$_POST['email'], $_SESSION['username']]);
    header('Location: index.php?view=view/profile');
    die;
}
