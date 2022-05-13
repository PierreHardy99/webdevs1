<?php

/**
 * Todo : Créez un script de traitement du formulaire de création de compagnie (view/company/create.php)
 *
 * Les champs du formulaire doivent correspondre aux types de données requises en base de données (table <company>).
 * Le managerid sera l'identifiant de l'utilisateur connecté.
 * Le cash contiendra la valeur par défaut.
 * Si la création échoue, affichez le message suivant : "Erreur dans la création de le Compagnie"
 */

$wlImg = ['jpeg','png', 'jpg'];

if (!empty($_POST['name']) && !empty($_POST['country'])) {

    $name = trim($_POST['name']);
    $ext = pathinfo($_FILES['logo']['name'],PATHINFO_EXTENSION);

    $connect = connect();
    $request = $connect->prepare('SELECT * FROM country WHERE id = ?');
    $request->execute([$_POST['country']]);
    $country = $request->fetchObject();
    if (!is_object($country)) {
        createAlert('Le pays est invalide!','danger','index.php?page=view/company/create');
    }

    if (!in_array($ext,$wlImg)) {
        createAlert('L\'extension d\'image n\'est pas autorisé','warning','index.php?page=view/company/create');
    }

    $insert = $connect->prepare('INSERT INTO company (name,countryid,managerid) VALUES (?,?,?)');
    $insert->execute([$name,$_POST['country'],$_SESSION['userid']]);
    if ($insert->rowCount()){
        $id = $connect->lastInsertId();

        $path = str_replace('\\','/', getcwd() . '/image/company/logo');

        if (!is_dir($path)) {
            mkdir($path,0755,true);
        }

        if (move_uploaded_file($_FILES['logo']['tmp_name'],$path . '/'. $id . '.' . $ext)) {
            createAlert('La company '.$_POST['name'].' a bien été ajouté!','success','index.php?page=view/company/profile');
        }
    }

} else {
    createAlert('Un des champs est vide!','danger','index.php?page=view/company/create');
}