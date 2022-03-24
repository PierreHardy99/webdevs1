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
                include_once $complete_path;
                die;
            }
        }
    }

header('Location: index.php?view=main');