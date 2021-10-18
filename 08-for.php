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
    for ($i=1; $i<=6; $i++) { 
        echo '<h'.$i.'>Titre de niveau '.$i.'</h'.$i.'>';
    }

    // 2)
    // Ecrire les années comprises entre 1970 et 2000
    // Utilisez des variables pour l'année de départ et l'année de fin
    $startYear = 1970;
    $endYear = 2000;
    for ($i=$startYear; $i<=$endYear ; $i++) { 
        echo $i.'<br>';
    }
    echo '<br>';

    // 3)
    // Inverser l'odres des années
    for ($i=$endYear; $i>=$startYear; $i--) { 
        echo $i.'<br>';
    }
    echo '<br>';

    // 4)
    // Mettre en gras une année sur deux (utilisez l'opérateur modulo)
    for ($i=$endYear; $i>=$startYear; $i--) { 
        if ($i % 2) {
            echo '<b>'.$i.'</b>';
        } else {
            echo $i;
        }
        echo '<br>';
    }

    echo '<br>';
    echo '<hr>';
    // Exemple d'une boucle pour alimenter une liste déroulante en HTML5
    // Liste en HTML
?>

<select>
    <option value="">2000</option>
    <option value="">1999</option>
    <option value="">1998</option>
    <option value="">1997</option>
    <option value="">1996</option>
    <option value="">1995</option>
    <option value="">1994</option>
</select>

<select name="year">
    <?php 
        // 5)
        // Créer une boucle permettant d'afficher les options d'une liste
        // Liste en PHP
        for ($i=$endYear; $i>=$startYear; $i--) { 
            echo '<option value="'.$i.'">'.$i.'</option>';
        }
    ?>
</select>

<select name="" id="">
    <?php 
        // Syntaxe alternative
        for ($i=$endYear; $i>=$startYear; $i--) : ?>
            <option value=""><?=$i?></option>
        <?php endfor ?>    
</select>
<hr>
<?php 

    // 6)
    // Créer une boucle permettant d'afficher le zéro non significatif des nombres de 1 à 20
    for ($i=1; $i<=20; $i++) {
        if ($i < 10) {
            echo '0'.$i;
        } else {
            echo $i;
        }
        echo '<br>';
    }
    echo '<hr>';
    // 7) 
    // Créer une boucle de 1 à 20 et mettre en gras les chiffres 5 et 15
    for ($i=1; $i<=20; $i++) {
        if ($i == 5 || $i == 15) {
            echo '<b>'.$i.'</b>';
        } else {
            echo $i;
        }
        echo '<br>';
    }
    echo '<hr>';
    // 8)
    // Créer un carré numéroté de n lignes sur n colonnes
    $rows = 3; // Lignes (rangées)
    $cols = 3; // Colonnes
    $k = 1; // compteur (numéro de la case)
    for ($i=1; $i <= $rows; $i++) { // boucle pour les lignes
        // echo '<br>'; 
        for ($j=1; $j <= $cols; $j++) { // boucle pour les colonnes (cases)
            echo $k++; // incrémentation du compteur
        }
        echo '<br>';
    }

?>
