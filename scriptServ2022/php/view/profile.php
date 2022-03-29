<?php
/**
 * Il convient de vérifier si l'utilisateur est connecté. Pour ce faire, on vérifie simplement si la variable de session existe
 * Il n'est pas utile d'ajouter le session_start ou l'include de session ici, car ce script est appelé depuis index.php qui le contient déjà
 */

if (!empty($_SESSION['username'])) {
    echo 'Hello ' . $_SESSION['username'];
    $user = userGet('username',$_SESSION['username'],DB_FETCH_OBJECT);
    foreach ($user as $key => $value) {
        if ($key != 'password') {
            echo '<p>'.$key.': '.$value.'</p>';
        }
    }
} else {
    header('Location: index.php?view=view/login');
    die;
}