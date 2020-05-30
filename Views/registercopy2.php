<?php
    require_once '../Views/header.php';
    require_once '../Views/nav.php';
   
?>
<!-- Registration form -->

<!--Alert creation compte réussi -->
<?php if (isset($success)){ ?>
<div class="container">
    <div class="row">
        <div class="form col-6 offset-3">
            <p class="alert alert-success text-center">Le compte a bien été créer !<br>Vous pouvez maintenant vous
                connecter avec vos identifiants</p>
        </div>
    </div>
</div>
<?php } else { ?>
<!-- Start Contact -->
<div id="contact" class="contact-box">
    <div class="container">
        <div class="divider"></div>
        <div class="heading">
            <h1 class="font-weight-bold text-uppercase text-center mt-5 ">Newsletter</h1>
            <p class="newstext text-center mb-5">Recevez en avant première l'actualité de Graines d'intérieurs : infos,
                nouveautés, coups de coeur, promos... <br>Vous pouvez également me laisser un message, j'y répondrais
                dés que possible.</p>
        </div>
        <div class="row">
            <div class=" col-lg-11 col-lg-offset-1">
                <div class="card-header .z-depth-4 info-color">
                    <h2 class="text-center font-weight-bold text-white">Inscription</h2>
                </div>
                <form class="card-body" method="POST" action="" novalidate="">
                    <div class="row">
                        <div class="form-inline col-md-6">
                            <label for="lastname">Nom* :</label>
                            <input autocomplete="false" name="lastname" type="text"
                                class="form-control <?= (isset($isSubmit) && !isset($errors['lastname'])) ? 'is-valid' : '' ?> <?= (isset($isSubmit) && isset($errors['lastname'])) ? 'is-invalid' : '' ?>"
                                id="lastname" required placeholder="DURAND">
                                <div class="invalid-feedback"> <?= $errors['lastname'] ?? '' ?>.</div>
                        </div>
                        <div class=" form-inline col-md-6 ">
                            <label for="firstname">Prénom* : </label>
                            <input autocomplete="false" name="firstname" type="text"
                                class="form-control <?= (isset($isSubmit) && !isset($errors['firstname'])) ? 'is-valid' : '' ?> <?= (isset($isSubmit) && isset($errors['firstname'])) ? 'is-invalid' : '' ?>"
                                id="firstname" required placeholder="Jean">   
                            <div class="invalid-feedback">
                                <?= $errors['firstname'] ?? '' ?>.
                            </div>
                        </div>
                        <div class=" form-inline col-md-6 ">
                            <label for="email">Email* : </label>
                            <input autocomplete="false" name="email" type="email"
                                class="form-control <?= (isset($isSubmit) && !isset($errors['email'])) ? 'is-valid' : '' ?> <?= (isset($isSubmit) && isset($errors['email'])) ? 'is-invalid' : '' ?>"
                                id="email" required>
                            <div class="invalid-feedback">
                                <?= $errors['email'] ?? '' ?>
                            </div>
                        </div>
                         <div class=" form-inline col-md-6">
                            <label for="phone">Tél.* : </label>
                            <input autocomplete="false" name="phone" type="tel"
                                class="form-control <?= (isset($isSubmit) && !isset($errors['phone'])) ? 'is-valid' : '' ?> <?= (isset($isSubmit) && isset($errors['phone'])) ? 'is-invalid' : '' ?>"
                                id="phone" required>
                            <div class="invalid-feedback">
                                <?= $errors['phone'] ?? '' ?>
                            </div> 
                        </div>
                        <div class=" form-inline col-md-6">
                            <label for="password">Mot de passe* : </label>
                            <input autocomplete="false" name="password" type="password"
                                class="form-control <?= (isset($isSubmit) && !isset($errors['password'])) ? 'is-valid' : '' ?> <?= (isset($isSubmit) && isset($errors['password'])) ? 'is-invalid' : '' ?>"
                                id="password" required>
                            <div class="invalid-feedback">
                                <?= $errors['password'] ?? '' ?>.
                            </div>
                        </div>
                        <div class=" form-inline col-md-6">
                            <label for="password_confirmation">Confirmation du mot de passe : </label>
                            <input autocomplete="false" name="password_confirmation" type="password"
                                class="form-control <?= (isset($isSubmit) && !isset($errors['password_confirmation'])) ? 'is-valid' : '' ?> <?= (isset($isSubmit) && isset($errors['password_confirmation'])) ? 'is-invalid' : '' ?>"
                                id="password_confirmation" required>
                            <div class="invalid-feedback">
                                <?= $errors['password_confirmation'] ?? '' ?>.
                            </div>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="message">Message : </label>
                            <textarea class=" form-control placeholder" id="message" name="message"
                                placeholder="Votre Message" rows="8" data-error="Ecrivez votre message"
                                required></textarea>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div> </div>
                        <div class="form-inline col-md-6">
                            <div class="form-check">
                                <input name="newsletter"
                                    class="form-check-input <?= (isset($isSubmit) && !isset($errors['newsletter'])) ? 'is-valid' : '' ?> <?= (isset($isSubmit) && isset($errors['newsletter'])) ? 'is-invalid' : '' ?>"
                                    type="checkbox" value="1" id="newsletter" required>
                                <label class="form-check-label" for="newsletter">Je souhaite recevoir la
                                    Newsletter</label>
                            </div>
                            <div class="invalid-feedback mt-3 ml-0">
                                <?= $errors['newsletter'] ?? '' ?>.
                            </div>
                        </div>
                        <div class="form-inline col-md-6">
                            <div class="form-check">
                                <input name="terms"
                                    class="form-check-input <?= (isset($isSubmit) && !isset($errors['terms'])) ? 'is-valid' : '' ?> <?= (isset($isSubmit) && isset($errors['terms'])) ? 'is-invalid' : '' ?>"
                                    type="checkbox" value="" id="terms" required>
                                <label class="form-check-label" for="terms">J'ai pris connaissance des conditions
                                    générales</label>
                            </div>
                            <div class="invalid-feedback mt-3 ml-0">
                                <?= $errors['terms'] ?? '' ?>.
                            </div>
                        </div>
                        <div class="col-md-12">
                        <p><strong>*</strong>Ces informations sont requises</p>
                        <div class="col-md-12">
                            <input type="submit" class=" contact button1 font-weight-bold mb-5 mx-auto d-block" value="Valider" />
                        </div>
                    </div>
            </div>
        </div>
    </div>
    <p class="thanks">Votre message a bien été envoyé. Merci de m'avoir contactée</p>
    </form>
</div>
<?php }
require_once '../Views/footer.php';?>