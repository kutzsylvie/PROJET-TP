<div class="container-connect">
    <!--Formulaire d'inscription-->
    <div class="row ">
        <form class="second" method="post" action="#" novalidate="">
            <div class="form">
                <h2 class="identity">Connectes-toi <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></h2>
                <div class="mail ml-3 mr-3">
                    <label for="email">Mail</label>
                    <input type="email" id="mail" name="email" placeholder="Dupont.daniel@gmail.com" required>
                    <?php if (isset($errors['login'])){ ?>
                    <span class="text-danger"><?= $errors['login'] ?></span>
                    <?php } ?>
                </div>
                <div class="password ml-3 mr-3 mb-3">
                    <label for="password">Mot de passe</label>
                    <input type="password" id="password" name="password" required>
                    <?php if (isset($errors['password'])){ ?>
                    <span class="text-danger"><?= $errors['password'] ?></span>
                    <?php } ?>
                </div>
                <button type="submit" class="col-8 offset-2 btn bg-success mt-2"> Se connecter</button>
                <a class="btn btn-warning col-8 offset-2" href="../Controllers/registerController.php"> Ou inscris-toi !</a>
            </div>