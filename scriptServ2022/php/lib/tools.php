<?php

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

function pictureB64(string $picture) : string{
    $imgData = base64_encode(file_get_contents($picture));
    $imgSrc = 'data:' . mime_content_type($picture) . ';base64,' . $imgData;
    $img = '<img src="' . $imgSrc . '" width="25rem" height="25rem">';
    return $img;
}
