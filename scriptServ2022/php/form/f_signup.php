<form action="index.php?view=action/signup" method="post" enctype="multipart/form-data">
    <label for="username">Identifiant</label>
    <input type="text" id="username" name="username">
    <label for="email">Adresse e-mail</label>
    <input type="email" id="email" name="email">
    <label for="pwd">Mot de passe</label>
    <input type="password" id="pwd" name="pwd">
    <label for="avatar">Image de profile</label>
    <input type="file" name="avatar" id="avatar" accept="image/png, image/jpg, image/jpeg">
    <input type="submit" value="Créer un compte">
</form>
Si vous possédez déjà un compte, veuillez vous connecter <a href="index.php?view=view/login">ici</a>