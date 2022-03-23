<?php
// Exercices tableaux
$courses = ['HTML' => 80, 'CSS' => 60, 'PHP' => 125, 'JS' => 100, 'Symfony' => 120, 'Design' => 80];

// 1. Ajoutez dans le tableau le cours "Network 40" (sans modifier manuellement le tableau)
// 2. Affichez le nombre de périodes du cours de CSS
// 3. Vérifiez si le cours de Symfony est bien dans le tableau.  Le résultat devrait être la valeur numérique 1
// 4. A l'aide d'une boucle, affichez tous les cours triés par périodes (croissant)
// 5. A l'aide d'une boucle, affichez les cours dont les périodes sont comprises entre 100 et 120
// 6. Affichez la moyenne des périodes et arrondissez le résultat
// 7. Convertissez le tableau associatif en variables et ajoutez 20 périodes au cours HTML.  Affichez le nouveau résultat.

?>
<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice Array 01</title>
</head>
<body>
    <fieldset>
        <h2>Exercice 1</h2>
        <?php 
            $courses['Network'] = 40;
            var_dump($courses);
        ?>
    </fieldset>

    <fieldset>
        <h2>Exercice 2</h2>
        <?php 
            echo($courses['CSS']);
        ?>
    </fieldset>

    <fieldset>
        <h2>Exercice 3</h2>
        <?php 
            echo(array_key_exists('Symfony',$courses));
        ?>
    </fieldset>

    <fieldset>
        <h2>Exercice 4</h2>
        <?php 
            asort($courses);
            foreach ($courses as $course => $period) {
                echo $course.' '.$period.'<br>';
            }
        ?>
    </fieldset>

    <fieldset>
        <h2>Exercice 5</h2>
        <?php 
            foreach ($courses as $course => $period) {
                if ($period >= 100 && $period <= 120) {
                    echo $course.' '.$period.'<br>';
                }
            }
        ?>
    </fieldset>

    <fieldset>
        <h2>Exercice 6</h2>
        <?php 
            echo 'Moyenne des périodes : '.round(array_sum($courses)/count($courses)).'<br>';
            
        ?>
    </fieldset>

    <fieldset>
        <h2>Exercice 7</h2>
        <?php 
            extract($courses);
            $HTML = $HTML + 20;
            echo $HTML;
        ?>
    </fieldset>
</body>
</html>




