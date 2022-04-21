<form action="index.php?view=action/profile" method="post" enctype="multipart/form-data">
    <label for="email">Adresse e-mail</label>
    <input type="email" id="email" name="email" class="form-control" value="<?=$user->email?>">
<!--    <label for="pwd">Mot de passe</label>-->
<!--    <input type="password" id="pwd" name="pwd" class="form-control" value="">-->
<!--    <label for="image">Image</label>-->
<!--    <input type="file" name="image" class="form-control" value="--><?//=$image?><!--">-->
    <input type="submit" value="Mettre à jour">
</form>