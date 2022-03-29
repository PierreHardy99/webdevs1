<?php
<<<<<<< HEAD
// Lorsqu'un utilisateur veut se connecter, il est impératif de supprimer toute valeur de session existante avant de connecter l'utilisateur [session]
session_unset();
/**
 * Il convient ensuite de démarrer la nouvelle session. Pour ce faire, nous pourrions :
 *
 * 1) Appeler la fonction php de démarrage de session :
 *      session_start();
 * 2) Inclure notre script contenant ce code (afin d'éviter la redondance) :
 *      require_once __DIR__ . '/../lib/session.php';
 * 3) Appeler ce script depuis la page index qui contient déjà le require du script de démarrage de session
 *      Dans ce 3e cas, aucun code ici n'est nécessaire !
*/
// Il convient ensuite de vérifier que les données de connexion de l'utilisateur correspondent à des données existantes
if (!empty($_POST['username']) && !empty($_POST['pwd'])) {
    if ($_POST['username'] == IEPSCF_USERNAME && $_POST['pwd'] == IEPSCF_PWD) {
        // Une fois les données validées, on assigne la ou les valeur(s) voulue(s) à la session [session]
        $_SESSION['username'] = $_POST['username'];
        // [Facultatif] Dans cet exercice, on redirige ensuite vers la page de profil
        header('Location: index.php?view=view/profile');
        die;
    }
}
header('Location: index.php?view=view/login');
die;
=======

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
>>>>>>> c0d620a3ab918a4c4fcf4b691a9ac2302793c5cd
