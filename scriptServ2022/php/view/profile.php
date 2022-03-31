<?php
/**
 * Il convient de vérifier si l'utilisateur est connecté. Pour ce faire, on vérifie simplement si la variable de session existe
 * Il n'est pas utile d'ajouter le session_start ou l'include de session ici, car ce script est appelé depuis index.php qui le contient déjà
 */

if (!empty($_SESSION['user']['username'])) {
    // var_dump($_SESSION['user']);
    // echo pictureB64($_SESSION['user']['picture']);
    echo '<h1>Bonjour '.$_SESSION['user']['username'].'</h1>';
    echo '<img src="'.$_SESSION['user']['picture'].'" alt="'.$_SESSION['user']['username'].' - avatar">';
    echo '<ul>
            <li>Email : '.$_SESSION['user']['email'].'</li>
            <li>Compte crée : '.$_SESSION['user']['created'].'</li>
            <li>Dernière connexion : '.$_SESSION['user']['lastlogin'].'</li>
          </ul>';
} else {
    header('Location: index.php?view=view/login');
    die;
}