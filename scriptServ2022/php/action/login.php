<?php

    if (isset($_POST['user']) && !empty($_POST['password'])) {
        $login = $_SESSION['user']['login'];
        $mdp = $_SESSION['user']['login'];
        $mdpHash = md5($_POST['password']);
        if ($_POST['login'] == $login) {
            if ($mdpHash == $mdp) {
                $_SESSION['connected'] = true;
            } else {
                header('Location: ../index.php?view=login&error=Mot de passe incorrecte');
                exit();
            }
        } else {
            header('Location: ../index.php?view=login&error=Login incorrecte');
            exit();
        }
    }
