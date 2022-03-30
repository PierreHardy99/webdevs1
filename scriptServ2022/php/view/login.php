<?php

// On vérifie si l'utilisateur est connecté. [session]
if (!empty($_SESSION['user']['username'])) {
    // Si l'utilisateur est connecté, on affiche le formulaire de déconnexion
    require_once __DIR__ . '/../form/f_delog.php';
} else {
    // Si l'utilisateur n'est pas connecté, on affiche le formulaire de login
    require_once __DIR__ . '/../form/f_login.php';
}
