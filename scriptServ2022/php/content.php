<?php

    $texts = ['html','php'];


    if (!empty($view)) {
        $path = __DIR__ . '/view/' . $view;
        foreach ($texts as $text) {
            $complete_path = $path . '.' . $text;
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
        }
    } elseif (!empty($action)) {
        $path = __DIR__ . '/action/' . $action;
        foreach ($texts as $text) {
            $complete_path = $path . '.' . $text;
            if (file_exists($complete_path)) {
                include_once $complete_path;
                die;
            }
        }
    }

header('Location: index.php?view=main');