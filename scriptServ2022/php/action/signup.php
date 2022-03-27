<?php

    if (isset($_POST['user']) && !empty($_POST['password'])){
        $_SESSION['user']['login'] = $_POST['user'];
        $_SESSION['user']['password'] = md5($_POST['password']);
        if (isset($_POST['name']) && !empty($_POST['name'])){
            $_SESSION['user']['name'] = $_POST['name'];
        }
        if (isset($_POST['firstname']) && !empty($_POST['firstname'])){
            $_SESSION['user']['firstname'] = $_POST['firstname'];
        }
         header('Location: ../index.php?view=login&succes=Enregistrement r%C3%A9ussi. Veuillez vous connectez');
        exit();

    } else {
        header('Location: ../index.php?view=signup&error=Veuillez compl%C3%A9ter le login et le mot de passe');
        exit();

    }
?>
