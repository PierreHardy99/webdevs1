<?php

/**
 * getSQL wrapper function for user table
 *
 * @see getSQL()
 * @param string $field
 * @param string $value
 * @param int $fetch
 * @param int $mode
 * @return array|false|int|mixed|object|PDOStatement|string
 */
function userGet(string $field, string $value, int $fetch = DB_FETCH_RESULT, int $mode = DB_MODE_EXECUTE) {

    return getSQL('user', $field, $value, $fetch, $mode);
}

function moveAvatar(array $picture, string $way, string $folder) : string {
    
    switch ($way) {
        case 'avatar':
            // Création du chemin vers le dossier
            $path = 'picture/profile/' . $folder . '/';
            break;
        
        default:
            $path = 'picture/miscellaneous/' . $folder . '/';
            break;
    }
    
    
    // Créer le dosser si le path existe pas

    if (!file_exists($path)) {
        mkdir($path);
    } 
    
    // exension autorisée
    $extensionArray = ['png','jpg','jpeg'];

    // Info du $_FILES
    $fileInfo = pathinfo($picture['name']);

    // Extension du $_FILES
    $extentedImage = $fileInfo['extension'];

    // Extension du $_FILES autorisée ?
    if (in_array($extentedImage, $extensionArray)) {
        // Ajouter l'image au path 
        $path.='avatar.'.$extentedImage;
        // Envoyer l'image
        move_uploaded_file($picture['tmp_name'], $path);
    } else {
        // Extension pas valide
        header('Location: index.php?view=view/signup');
    }
    return $path;
}