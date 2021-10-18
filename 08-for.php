<?php 
    // Boucle for()
    /*
    for(initialisation; condition d'arrêt; incrémentation){
        instructions;
    }
    */
    for ($i=1; $i <= 10 ; $i++) { 
        echo $i.'<br>';
        // incrémentation de $i
    }

    // 1)
    // A l'aide d'une boucle écrivez les 6 niveaux de titre HTML
    // <h1>Titre de niveau 1</h1>
    for ($i=1; $i <= 6; $i++) { 
        echo '<h'.$i.'>Titre de niveau '.$i.'</h'.$i.'>';
    }
?>

