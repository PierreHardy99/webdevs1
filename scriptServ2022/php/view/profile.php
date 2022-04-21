<?php
/**
 * Il convient de vérifier si l'utilisateur est connecté. Pour ce faire, on vérifie simplement si la variable de session existe
 * Il n'est pas utile d'ajouter le session_start ou l'include de session ici, car ce script est appelé depuis index.php qui le contient déjà
 */
if (!empty($_SESSION['username'])) {
    $output = '';
    $image = '';
    // On fait appel à la fonction userGet en lui passant les bons paramètres. On le récupère sous la forme d'un objet
    $user = userGet('username', $_SESSION['username'], DB_FETCH_OBJECT);
    // On parcourt chaque élément de l'objet sur base de sa clé (propriété / référence) et de sa valeur
    foreach ($user as $key => $value) {
        // On gère les cas spécifiques à chaque propriété
        switch ($key) {
            // On n'affiche pas l'id, le password ou l'admin
            case 'id':
            case 'password':
            case 'admin':
                break;
            // On formate l'affichage de la date
            case 'created':
            case 'lastlogin':
                $output .= '<tr><td>' . $key . '</td><td>' . date_format(new DateTime($value), 'd-m-Y à H:i') . '</td></tr>';
                break;
            case 'image':
                $image = '<img src="image/profile/' . $user->id . '/' . $user->image . '" alt="image de profil">';
                $output .= '<tr><td colspan="2">' . $image . '</td></tr>';
                break;
            default:
                $output .= '<tr><td>' . $key . '</td><td>' . $value . '</td></tr>';
        }
    }
    // Output
    ?>
    <fieldset>
        <legend>Profil utilisateur</legend>
        <table class="table table-striped">
            <?= $output ?>
        </table>
    </fieldset>
<!--    <a class="btn btn-primary m-1" data-bs-toggle="collapse" href="#cupdate" role="button" aria-expanded="false">-->
<!--        Mise à jour-->
<!--    </a>-->
    <div class="" id="cupdate">
    <fieldset class="mt-1">
        <legend>Mise à jour</legend>
    <?php
    require_once __DIR__ . '/../form/f_profile.php';
    echo '</fieldset></div>';
} else {
    header('Location: index.php?view=view/login');
    die;
}