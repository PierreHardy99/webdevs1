<?php
/**
 *  Script de gestion de contenu dynamique (basic routing)
 */

// Tableau comprenant les extensions de fichiers valides (l'ordre de préséance importe. Dans le cas présent, les fichiers html auront la priorité sur le php possédant le même path)
$exts = ['html', 'php'];

<<<<<<< HEAD
if (!empty($view)) {

    // pour chaque extension valide ...
    foreach ($exts as $ext) {
        $complete_path = $view . '.' . $ext;
        // On vérifie si le fichier existe sur le serveur
        if (file_exists($complete_path)) {
            // s'il existe, on exécute son contenu
            include_once $complete_path;
            die;
=======

    if (!empty($view)) {
        foreach ($texts as $text) {
            $complete_path = $view . '.' . $text;
            if (file_exists($complete_path)) {

                if ($view == 'play') {
                    $options = '';
                    for ($i=0;$i<=100;$i++) {
                        $options .= '<option value="'.$i.'">'.$i.'</option>';
                    }
                }

                if ($view == 'signup' && isset($_SESSION['connected']) == 'true' || $view == 'login' && isset($_SESSION['connected']) == 'true') {
                    header('Location: index.php?view=profile');
                    exit();
                }
                include_once $complete_path;
                die;
            }
>>>>>>> c0d620a3ab918a4c4fcf4b691a9ac2302793c5cd
        }
    }
}
header('Location: index.php?view=view/main');
die;