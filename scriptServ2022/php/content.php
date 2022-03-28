<?php

    $texts = ['html','php'];


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
        }
    }

header('Location: index.php?view=main');