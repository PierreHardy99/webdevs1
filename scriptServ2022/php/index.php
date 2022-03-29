<?php
/**
 * main page
 */

// Le fichier qui gère les sessions [sessions]
require_once __DIR__ . '/lib/session.php';
// Le fichier de configuration générale (ce fichier ne doit PAS faire partie du git. Ajoutez le au .gitignore)
require_once __DIR__ . '/config.php';
// Un fichier comprenant la connexion à la base de données [pdo]
require_once __DIR__ . '/lib/db.php';
// Un fichier comprenant des fonctions génériques [functions]
require_once __DIR__ . '/lib/tools.php';
// Un fichier comprenant des fonctions d'affichage [functions]
require_once __DIR__ . '/lib/output.php';

$view = '';
if (isset($_GET['view'])) {
    $view = $_GET['view'];
}

require_once __DIR__ . '/view/header.html';
require_once __DIR__ . '/view/menu.html';
require_once __DIR__ . '/view/main.php';
require_once __DIR__ . '/view/footer.html';
