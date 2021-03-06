<?php 

require 'function.php';
$listAddress = getCustomers();



?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BDD - Sakila</title>
</head>
<body>
    <!-- <style>
        #td:hover{
            color: red;
            transition: 0.5s;
            cursor: default;
        }
    </style> -->
    <table>
        <tr>
            <th>Prénom</th>
            <th>Nom</th>
            <th>Email</th>
            <th>Activé</th>
            <th>Date création</th>
            <th>Adresse</th>
            <th>District</th>
        </tr>
        <tr>
            <?php 
            
                foreach ($listAddress as $value) {
            ?>
                    <tr style="text-align: center;">
                        <td><?=$value['first_name']?></td>
                        <td><?=$value['last_name']?></td>
                        
                        <?php 
                            if ($value['active'] == '1') {
                                echo '<td>'.$value['email'].'</td>';
                                echo '<td style="color: #8EF067;">Oui</td>';
                            } else {
                                echo '<td><a href="mailto:'.$value['email'].'?subject=Activation%20du%20compte%20&body=Bonjour%20'.$value['first_name'].'%20'.$value['last_name'].'%2C%0D%0A%0D%0Avotre%20compte%20n\'a%20pas%20encore%20%C3%A9t%C3%A9%20activ%C3%A9%2C%20veuillez%20l\'activez%20!%0D%0A%0D%0ABien%20%C3%A0%20vous%0D%0A%0D%0ASakila%20Team">'.$value['email'].'</a></td>';
                                echo '<td style="color: #F07067;">Non</td>';
                            }
                        ?>
                        <td><?=$value['create_date']?></td>
                        <td><a href="https://maps.google.com/?q=<?=$value['address']?>, <?=$value['district']?>" target="_blank"><?=$value['address']?></a></td>
                        <?php 
                            if ($value['district'] == null) {
                                echo '<td style="color: #F07067;">Aucun</td>';
                            } else {
                                echo '<td>'.$value['district'].'</td>';
                            }
                        ?>
                    </tr>
            <?php
                }
            
            ?>
        </tr>
    </table>
</body>
</html>