<?php
require_once '../Views/home/header.php';
require_once '../Views/home/nav.php';
if (isset($success)) {
    ?>
    <p class="alert alert-success">Le profil du patient a été modifié avec succès!</p>
<?php } ?>
<div class="row">
    <div class="card col-sm-8 offset-2 bg-light">
        <div class="card-header font-weight-bold bg-info">
            <h2>Modifier mon profil</h2>
        </div>
        <form method="post" action="#">
            <div class="form-group col">
                <label for="lastName">Nom</label>
                <input name="lastname" type="text" id="lastname" class="form-control" placeholder="" value="<?= $lastname ?>">
                <span class="invalid-feedback"><?= ($errors['lastname']) ?? '' ?></span>
            </div>
            <div class="form-group col">
                <label for="firstName">Prénom</label>
                <input name="firstname" type="text" id="firstname" class="form-control" placeholder="" value="<?= $firstname ?>">
                <span class="invalid-feedback"><?= ($errors['firstname']) ?? '' ?></span>
            </div>
            <div class="form-group col">
                <label for="email"> Mail:</label>
                <input type="email" id="mail" name="email" value="<?= $users->email ?>">
            </div>
            <div class="form-group col">
                <label for="password"> Mot de passe:</label>
                <input type="password" id="password" name="password" value="<?= $users->password ?>">
            </div>
            <button type="submit" class="btn btn-outline-primary float-right mt-4">Envoyer les modifications</button>
        </form>
    </div>   
</div>
<?php
require_once '../Views/home/footer.php';
?>