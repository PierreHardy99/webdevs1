<?php

        session_start();

    if (isset($_GET['view'])) {
        $view = $_GET['view'];
    }

    if (isset($_GET['action'])) {
        $action = $_GET['action'];
    }

    // require_once __DIR__ . '/view/main.html';

    require_once __DIR__ . '/content.php';
?>
