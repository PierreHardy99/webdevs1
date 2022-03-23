<?php
// 1. manipulations des tableaux multidimensionnels

// 1.1 Inclure le fichier "members-array.php"
// 1.2 Affichez son contenu dans un tableau HTML.
// 1.3 La première colonne du tableau contiendra une numérotation.
// 1.4 Les membres seront affichés par ordre alphabétique (sur le nom de famille).
// 1.5 Les en-têtes du tableau (titres) seront également affichés à l'aide d'une boucle.
// 1.6 Mettre une majuscule aux étiquettes (fonction en PHP)
// 1.7 Colorier l'arrière plan d'une ligne sur deux.  Utiliser l'opérateur Modulo en PHP.

require_once 'sources/members-array.php';
?>

<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice Array 02</title>
</head>
<body>
    <style>
        .pair {
            background-color: #4dccff;
        }

        .impair {
            background-color: red;
        }
    </style>
    <table>
        <thead>
            <tr>
                <th>Numérotation</th>
                <?php 
                    foreach ($members[0] as $title => $value) {
                        echo '<th>'.ucwords($title).'</th>';
                    }
                ?>
            </tr>
        </thead>
        <tbody>
            <tr>
            <?php
                
                $surname = array_column($members, 'surname');
                array_multisort($surname,SORT_ASC,$members);
                foreach ($members as $key => $value) {
                    if ($key % 2 == 0) {
                        echo '<tr class="pair">
                                <td>'.$key.'</td>'.
                                '<td>'.$value['surname'].'</td>'.
                                '<td>'.$value['name'].'</td>'.
                                '<td>'.$value['email'].'</td>'.
                                '<td>'.$value['date'].'</td>'.
                                '<td>'.$value['country'].'</td>'.
                            '</tr>';
                    } else {
                        echo '<tr class="impair">
                                <td>'.$key.'</td>'.
                                '<td>'.$value['surname'].'</td>'.
                                '<td>'.$value['name'].'</td>'.
                                '<td>'.$value['email'].'</td>'.
                                '<td>'.$value['date'].'</td>'.
                                '<td>'.$value['country'].'</td>'.
                            '</tr>';
                    }
                }
            ?>
            </tr>
        </tbody>
        
    </table>
</body>
</html>