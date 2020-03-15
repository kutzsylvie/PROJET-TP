<?php
  require_once '../Views/header.php';
  require_once '../Views/nav.php';
// if (isset($_POST['name']) && !empty($_POST['name']) &&
//         isset($_POST['mail']) && !empty($_POST['mail']) &&
//         isset($_POST['message']) && !empty($_POST['message']) &&
//         isset($_POST['captcha']) && !empty($_POST['captcha'])
// ){
//     $captcha = (int) $_POST['captcha'];
//     if($captcha === 8){
//         $nom = htmlspecialchars($_POST['name']);
//         $mail = htmlspecialchars($_POST['mail']);
//         $message = htmlspecialchars($_POST['message']);
//         $destinataire = 'sylviekutz@gmail.com';
//         mail($destinataire, $name, 'Mail : '. $mail. ' Message : ' . $message);
//         echo '<div class="alert alert-success" role="alert">';
//             echo 'Message envoyé';
//         echo '</div>';
//     } else {
//         echo '<div class="alert alert-danger" role="alert">';
//         echo 'Erreur de Captcha, recommencer';
//         echo '</div>';
//     }
// }
?>
<!-- Start Contact -->
<div id="contact" class="contact-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-sm-12 col-xs-12">
                <h1 class="font-weight-bold text-uppercase text-center mt-5 ">Newsletter</h1>
                <p class="newstext text-center">Recevez en avant première l'actualité de Graines d'intérieurs<br>
                    Nos infos, nos nouveautés, nos coups de coeur, promos...</p>

                <form method="POST" action="#" novalidate="" class="pl-5">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="firstname">Prénom : </label>
                                <input autocomplete="false" name="firstname" type="text" value="<?= $firstname;?>"
                                    class="form-control <?= (isset($isSubmit) && !isset($errors['firstname'])) ? 'is-valid' : '' ?> <?= (isset($isSubmit) && isset($errors['firstname'])) ? 'is-invalid' : '' ?>"
                                    id="firstname" required>
                                <div class="invalid-feedback">
                                    <?= $errors['firstname'] ?? '' ?>.
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                <label for="name">Nom : </label>
                                <input autocomplete="false" name="nom" type="text" value="<?= $name;?>"
                                    class="form-control <?= (isset($isSubmit) && !isset($errors['name'])) ? 'is-valid' : '' ?> <?= (isset($isSubmit) && isset($errors['name'])) ? 'is-invalid' : '' ?>"
                                    id="name" required>
                                <div class="invalid-feedback">
                                    <?= $errors['name'] ?? '' ?>.
                                </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                <label for="email"> email: </label>
                                <input autocomplete="false" name="mail" type="email" value="<?= $mail;?>"
                                    class="form-control <?= (isset($isSubmit) && !isset($errors['mail'])) ? 'is-valid' : '' ?> <?= (isset($isSubmit) && isset($errors['mail'])) ? 'is-invalid' : '' ?>"
                                    id="mail" required>
                                <div class="invalid-feedback">
                                    <?= $errors['mail'] ?? '' ?>.
                                </div>
                                  </div>              
                                <div class="col-md-4">
                                    <div
                                        class="form-group row no-gutters align-items-center text-danger font-weight-bold ml-5 mt-5">
                                        <label for="captcha" class="col-auto pr-3">Captcha : Combien font 3+5 :</label>
                                        <input type="number" name="captcha" id="captcha"
                                            class="form-control col font-weight-bold" required />
                                    </div>
                                </div>
                                <input type="submit" class="btn btn-dark font-weight-bold mb-5 mx-auto d-block"
                                    value="Valider" />
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>

<!-- End Contact -->
<div class='border p-1 mt-5'>
    <?php
include '../Views/footer.php';