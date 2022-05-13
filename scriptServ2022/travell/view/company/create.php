<?php

/**
 * Todo : Modifiez le formulaire de création de Compagnie ci-dessous, comprenant les champs suivants :
 * - nom
 * - pays, parmi la liste des pays, triés par ordre alphabétique (table <country>)
 * - une image comme logo
 * - bouton de validation
 *
 * Ce formulaire ne sera accessible qu'aux utilisateurs ayant le rôle de 'manager' ou 'admin'
 * La méthode du formulaire sera de type : POST
 * Le nom est un champ obligatoire
 * Le traitement du formulaire se fera dans le fichier app/company/create.php
 */

?>
<form action="index.php?page=app/company/create" method="POST" enctype="multipart/form-data">
    <label for="name">Nom</label>
    <input type="text" id="name" name="name" class="form-control" required>
    <label for="country">Pays</label>
    <select name="country" id="country" class="form-control">
        <?= getList(connect(), 'country') ?>
    </select>
    <label for="formFile" class="form-label">Logo</label>
    <input type="file" name="logo" class="form-control" id="formFile">
    <input type="submit" value="Créer" class="btn btn-primary mt-2">
</form>
