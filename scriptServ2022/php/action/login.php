<?php

    if (isset($_POST['user']) && !empty($_POST['password'])) {
        $login = $_SESSION['user']['login'];
        $mdp = $_SESSION['user']['password'];
        $mdpHash = hash('sha256',$_POST['password']);

        if ($_POST['user'] == $login) {
            if ($mdpHash == $mdp) {
                $_SESSION['connected'] = true;
                header('Location: index.php?view=profile');
                exit();
            } else {
                header('Location: index.php?view=login&error=Mot de passe incorrecte');
                exit();
            }
        } else {
            header('Location: index.php?view=login&error=Login incorrecte');
            exit();
        }
    }
