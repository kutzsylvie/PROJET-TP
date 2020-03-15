<?php
require_once '../Views/header.php';
if (isset($success)) {
    // message de confirmation et on informe à l'utilisateur qui va être déconnecté
    ?>
<div class="container">
    <div class="row">
        <div class="form col-6 offset-3">
            <p class="alert alert-success text-center">Le profil a été modifié avec succès!<br> Veuillez vous
                reconnecter.</p>
        </div>
    </div>
</div>
<?php } 
else{
    ?>
<div class="container">
    <div class="row">
        <div class="form col-10 offset-1">
            <div class="card">
                <div class="card-header bg-info">
                    <h3 class="card-title mt-2">Consulter et modifier mon profil</h3>
                </div>
                <div class="card-body ">
                    <form method="post" action="#">
                        <div class="row">
                            <p class="col-12">En cas de modification, une reconnexion sera necessaire pour valider vos
                                paramètres.</p>
                            <div class="form-group col-6">
                                <label for="lastName">Nom</label>
                                <input name="lastname" type="text" id="lastName" class="form-control" placeholder=""
                                    value="<?= $user->firstname ?>">
                                <span class="invalid-feedback d-block"><?= ($errors['lastname']) ?? '' ?></span>
                            </div>
                            <div class="form-group col-6">
                                <label for="firstName">Prénom</label>
                                <input name="firstname" type="text" id="firstName" class="form-control" placeholder=""
                                    value="<?= $user->lastname ?>">
                                <span class="invalid-feedback  d-block"><?= ($errors['firstname']) ?? '' ?></span>
                            </div>
                            <div class="form-group col-12">
                                <label for="email"> Mail:</label>
                                <input type="email" id="mail" name="email" value="<?= $user->email ?>"
                                    class="form-control">
                                <div class="invalid-feedback  d-block">
                                    <?= $errors['email'] ?? '' ?>.
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-check">
                                    <input name="newsletter"
                                        class="form-check-input"
                                        type="checkbox" value="1" id="newsletter"
                                        <?php
                                        if($user->newsletter == 1){
                                            echo 'checked';
                                        }
                                        ?>
                                        >
                                    <label class="form-check-label" for="newsletter">Newsletter</label>
                                </div>
                                <div class="invalid-feedback mt-3 ml-0">
                                    <?= $errors['newsletter'] ?? '' ?>.
                                </div>
                            </div>
                            <div class="btn-group col-12" role="group" aria-label="Basic example">
                                <button type="submit" class="btn btn-info ">Modifier</button>
                                <button type="button" class="btn btn-danger" data-toggle="modal"
                                    data-target="#deleteProfil">Supprimer mon
                                    profil
                                </button>
                                <a href="../Controllers/indexController.php" class="btn btn-success">Retour</a>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal" id="deleteProfil" tabindex="-1" role="dialog" aria-labelledby="deleteProfilLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteProfilLabel">Suppression de profil</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Etes vous sur de vouloir supprimer votre profil ? <br> Cette action est irreversible !</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                    <a href="../Controllers/deleteprofilController.php" class="btn btn-primary">Supprimer</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
}

?>
<?php
require_once '../Views/footer.php';