<?php
    require_once '/Views/header.php';
    require_once '/Views/nav.php';
?>
<!-- Start Contact -->
<div id="contact" class="contact-box">
<div class="container">
    <div class="row justify-content-center">
      <h1 class="font-weight-bold text-uppercase text-center mt-5 ">Newsletter</h1>
       <p class="newstext text-center">Recevez en avant première l'actualité de Graines d'intérieurs<br>
           Nos infos, nos nouveautés, nos coups de coeur, promos...</p>
        <div class="col-md-6 card">
            <div class="card-header .z-depth-4 info-color">
                <h1 class="text-center font-weight-bold text-white">Inscription</h1>
            </div>
            <form class="card-body" method="POST" action="" novalidate="">
                <div class="form-group md-form">
                    <label for="firstname">Prénom : </label>
                    <input  autocomplete="false" name="firstname" type="text" class="form-control <?= (isset($isSubmit) && !isset($errors['firstname'])) ? 'is-valid' : '' ?> <?= (isset($isSubmit) && isset($errors['firstname'])) ? 'is-invalid' : '' ?>" id="firstname" required>
                    <div class="invalid-feedback">
                    <?= $errors['firstname'] ?? '' ?>.
                    </div>
                </div>
                <div class="form-group md-form">
                    <label for="lastname">Nom : </label>
                    <input  autocomplete="false" name="lastname" type="text" class="form-control <?= (isset($isSubmit) && !isset($errors['lastname'])) ? 'is-valid' : '' ?> <?= (isset($isSubmit) && isset($errors['lastname'])) ? 'is-invalid' : '' ?>" id="lastname" required>
                    <div class="invalid-feedback">
                    <?= $errors['lastname'] ?? '' ?>.
                    </div>
                </div>
                <div class="form-group md-form">
                    <label for="emailRegister">Email : </label>
                    <input  autocomplete="false" name="email" type="text" class="form-control <?= (isset($isSubmit) && !isset($errors['email'])) ? 'is-valid' : '' ?> <?= (isset($isSubmit) && isset($errors['email'])) ? 'is-invalid' : '' ?>" id="emailRegister" required>
                    <div class="invalid-feedback">
                        <?= $errors['email'] ?? '' ?>
                    </div>
                </div>
                <div class="form md-form">
                    <label for="password">Mot de passe : </label>
                    <input  autocomplete="false" name="password" type="password" class="form-control <?= (isset($isSubmit) && !isset($errors['password'])) ? 'is-valid' : '' ?> <?= (isset($isSubmit) && isset($errors['password'])) ? 'is-invalid' : '' ?>" id="password" required>
                    <div class="invalid-feedback">
                    <?= $errors['password'] ?? '' ?>.
                    </div>
                    <div class="form md-form">
                        <label for="password_confirmation">Confirmation du mot de passe : </label>
                        <input  autocomplete="false" name="password_confirmation" type="password" class="form-control <?= (isset($isSubmit) && !isset($errors['password_confirmation'])) ? 'is-valid' : '' ?> <?= (isset($isSubmit) && isset($errors['password_confirmation'])) ? 'is-invalid' : '' ?>"
                            id="password_confirmation" required>
                        <div class="invalid-feedback">
                        <?= $errors['password_confirmation'] ?? '' ?>.
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <textarea class="form-control placeholder" id="message"  name="message"placeholder="Votre Message" rows="8" data-error="Ecrivez votre message" required></textarea>
                        <div class="help-block with-errors"></div>
                    </div>
                <div class="form-group">
                    <div class="form-check">
                        <input name="terms" class="form-check-input <?= (isset($isSubmit) && !isset($errors['terms'])) ? 'is-valid' : '' ?> <?= (isset($isSubmit) && isset($errors['terms'])) ? 'is-invalid' : '' ?>" type="checkbox" value="" id="terms"
                            required>
                        <label class="form-check-label" for="terms">Agree to terms and conditions</label>
                    </div>
                    <div class="invalid-feedback mt-3 ml-0">
                    <?= $errors['terms'] ?? '' ?>.
                    </div>
                </div>
                <button class="btn btn-info btn-rounded" type="submit">S'inscrire</button>
                <div class="col-md-4">
                    <div class="form-group row no-gutters align-items-center text-danger font-weight-bold ml-5 mt-5">
                        <label for="captcha" class="col-auto pr-3">Captcha : Combien font 3+5 :</label>
                        <input type="number" name="captcha" id="captcha" class="form-control col font-weight-bold" required/>
                    </div>
                </div>
                <input type="submit" class="btn btn-dark font-weight-bold mb-5 mx-auto d-block" value="Valider" />
            </form>
        </div>
    </div>
</div>

<?php
require_once '/Views/footer.php';
