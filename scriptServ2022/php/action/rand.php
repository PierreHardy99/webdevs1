<?php

    if (isset($_POST['rand'])) {
        $random = mt_rand(0,100);
        if ($_POST['rand'] == $random) {
            $win = "gagné";
        } else {
            $win = "perdu";
        }

        echo '<p>Vous avez '.$win.'<br> Votre nombre: '.$_POST['rand'].'<br> Nombre a trouvé: '.$random.'</p><br><a href="../index.php?view=play">Rejouer</a>';
    } else {
        header('Location: index.php?view=play');
    }

?>
