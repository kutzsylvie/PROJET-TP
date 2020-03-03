<?php
include 'header.php';
if (isset($_POST['name']) && !empty($_POST['name']) &&
        isset($_POST['mail']) && !empty($_POST['mail']) &&
        isset($_POST['message']) && !empty($_POST['message']) &&
        isset($_POST['captcha']) && !empty($_POST['captcha'])
){
    $captcha = (int) $_POST['captcha'];
    if($captcha === 8){
        $nom = htmlspecialchars($_POST['name']);
        $mail = htmlspecialchars($_POST['mail']);
        $message = htmlspecialchars($_POST['message']);
        $destinataire = 'sylviekutz@gmail.com';
        mail($destinataire, $name, 'Mail : '. $mail. ' Message : ' . $message);
        echo '<div class="alert alert-success" role="alert">';
            echo 'Message envoyé';
        echo '</div>';
    } else {
        echo '<div class="alert alert-danger" role="alert">';
        echo 'Erreur de Captcha, recommencer';
        echo '</div>';
    }
}
?>
<!-- Start Contact -->
<div id="contact" class="contact-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-sm-12 col-xs-12">
                   <h1 class="font-weight-bold text-uppercase text-center mt-5 ">Newsletter</h1>
                    <p class="newstext text-center">Recevez en avant première l'actualité de Graines d'intérieurs<br>
                        Nos infos, nos nouveautés, nos coups de coeur, promos...</p>

                <form method="POST" action="#" class="pl-5">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <input class ="placeholder"type="text" id="name" name="name" placeholder="Nom" required data-error="Entrez votre nom s'il vous plaît">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input class ="placeholder" type="email" placeholder="nom@exemple.com" id="email" class="form-control" name="mail" required data-error="Entrez votre Email s'il vous plaît">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <textarea class="form-control placeholder" id="message"  name="message"placeholder="Votre Message" rows="8" data-error="Ecrivez votre message" required></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
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
        </div>
    </div>
</div>

<!-- End Contact -->
<div class='border p-1 mt-5'>
<?php
include 'footer.php';
