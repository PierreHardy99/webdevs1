<?php 

    ///////////////// TABLEAUX INDEXES /////////////////
    // Variable de type string
    $string = 'HTML, CSS, PHP, Python, JavaScript';

    // Variable de type array
    $array = ['HTML','CSS','PHP','Python','JavaScript'];

    // Affichage des valeurs du tableau par leur index (position)
    echo $array[0];
    echo '<br>';
    echo $array[1];
    echo '<br>';
    echo $array[2];
    echo '<br>';
    
    echo '<hr>';

    // Affichage des valeurs du tableau à l'aide d'une boucle (foreach)

    // foreach (array as valu){
    //    Instruction;
    // }
    foreach ($array as $course) {
        echo $course.'<br>';
    }

    echo '<hr>';
    
    // Modifier le format de sortie
    foreach ($array as $course) {
        echo '<a href="#">'.$course.'</a><br>';
    }
    
    echo '<hr>';

    // Trier le tableau
    // sort() ordre croissant
    // rsort() ordre décroissant

    rsort($array);
    foreach ($array as $course) {
        echo $course.'<br>';
    }

    // Compter le nombre d'élément du tableau
    // count(array);
    // Vous donnez n cours
    echo '<p>Vous donnez '.count($array).' cours</p>';

    echo '<hr>';

    // Vérifier la présence d'un élément dans un tableau
    // in_array(array);
    echo in_array('PHP',$array).'<br>';

    echo '<hr>';

    // Si le cours n'est pas dans la liste, affichez 'Le cours de ... ne se donne pas cette année'. Utilisez une variable pour le cours (needle)
    $course = 'XML';

    if (!in_array($course, $array)) {
        echo 'Le cours de '.$course.' ne se donne pas cette année';
    }

    echo '<hr>';

    // Ajouter un éléement au tableau
    // Fonction native: array_push()

    $array[] = 'MySql';

    foreach ($array as $course) {
        echo $course.'<br>';
    }

    echo '<hr>';

    ///////////////// TABLEAUX ASSOCIATIFS /////////////////
    // Principe du couple clé => valeur
    // Syntaxe du tableau
    // $array = [clé => valeur, clé => valeur, ...]
    // Syntaxe du foreach
    // foreach(array as $key => $value){ Instruction }
    $courses = ['HTML' => 120, 'CSS' => 80, 'PHP' => 160, 'Python' => 100, 'JavaScript' => 60];

    foreach ($courses as $course => $time) {
        echo $course.' '.$time.' périodes<br>';
    }

    echo '<hr>';

    // Affichage hors boucle
    echo 'CSS '.$courses['CSS'].' périodes';

    echo '<hr>';

    // EX: Afficher les cours et les périodes avec une numérotation
    $i = 1;
    foreach ($courses as $course => $time) {
        echo $i++.') '.$course.' '.$time.' périodes<br>';
    }

    echo '<hr>';

    // Trier sur les tableaux associatifs
    // ksort() trie sur les clés par odre alphabétique
    // krsort() trie sur les clés par ordre inverse
    // asort() trie sur les valeurs par odre alphabétique
    // arsort() trie sur les valeurs par odre inverse

    arsort($courses);
    foreach ($courses as $course => $time) {
        echo $course.' '.$time.' périodes<br>';
    }

    echo '<hr>';

    // nombre de cours:
    echo 'Nombre de cours : '.count($courses).'<br>';
    // somme des périodes
    echo 'Somme des périodes : '.array_sum($courses).'<br>';
    // moyenne des périodes
    echo 'Moyenne des périodes : '.array_sum($courses)/count($courses).'<br>';
    // Afficher les périodes les plus petites
    echo 'La plus petites période: '.min($courses).'<br>';
    // Afficher les périodes les plus élevés
    echo 'La plus grande période: '.max($courses).'<br>';

    echo '<hr>';

    // Ajouter un couple (cours) au tableau et boucler le résultat

    $courses['MySql'] = 20;
    foreach ($courses as $course => $time) {
        echo $course.' '.$time.' périodes<br>';
    }

    echo '<hr>';

    // Vérifier la présence d'une clé dans un tableau associatif
    // soit key_exits() ou array_key_exists()
    // Si le cours DotNet n'est pas dans la liste, afficher 'Le cours ne se donne pas cette année'
    if (!array_key_exists('DotNet',$courses)) {
        echo 'Le cours ne se donne pas cette année';
    }


?> 