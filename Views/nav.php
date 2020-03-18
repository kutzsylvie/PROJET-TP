<nav class="navbar navbar-expand-lg ">
<div class="col-2">
                        <a href="/Controllers/accueilController.php"><img src="/public/assets/img/Logo/logo_original.jpg" alt="logo" class="rounded-circle img-fluid logosize"/></a>
                    </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon btn btn-secondary"></span>
            </button>
            <div class="collapse navbar-collapse w-100 d-flex justify-contend-between" id="navbarSupportedContent">
                <ul class="navbar-nav ">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button"> Marques du magasin</a>
                        <div class="dropdown-menu mt-5" aria-labelledby="navbarDropdown">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-4">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link active" href="../../Views/brands/FARROW.php">FARROW & BALL</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="../../Views/brands/COLE & SON.php">Cole & Son</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="../../Views/brands/MISSPRINT.php">MissPrint</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link active" href="../../Views/brands/ELITIS.php">Elitis</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="../../Views/brands/JAB ANSTOETZ.php">JAB ANSTOETZ</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!--                             /.col-md-4  -->
                                    <div class="col-md-4">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link active" href="../../Views/brands/FAT BOYS.php">FAT BOYS</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="../../Views/brands/WOODWICK.php">WOODWICK</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="../../Views/brands/GEODESIS.php">GEODESIS</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="../../Views/brands/SOPHIE JANIERE.php">SOPHIE JANIERE</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="../../Views/brands/LIGHT & LIVING.php">Light&Living</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="../../Views/brands/EN FIL D'INDIENNE.php">en fil d'indienne</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!--                             /.col-md-4  -->
                                    <div class="col-md-4">
                                        <a>
                                            <img src="public/assets/img/Ambiances/farrowpres.jpg" alt="presentoir farrow" class="img-fluid">
                                        </a>
                                        <p class="text-white">Visitez les pages de nos partenaires.</p>
                                    </div>
<!--                             /.col-md-4  -->
                                </div>
<!--                      /.container  -->
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../../Views/Actualités/deco.php">Conseil Déco</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="../../Views/Actualites/produits.php" id="navbarDropdown" role="button">Produits</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <div class="container w-100">
                                <div class="row">
                                    <div class="col-md-4">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link active" href="../../Views/Actualites/bougies.php">Bougies</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="../../Actualites/luminaires.php">Luminaires</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="../../Actualites/textile.php">Textile</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="../../Actualites/mobilier.php">Mobilier</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="../../Actualites/decoration.php">Déco</a>
                                            </li>
                                        </ul>
                                    </div>
<!--                             /.col-md-4  -->
                                    <div class="col-md-4">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link active" href="#">Active</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#">Link item</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#">Link item</a>
                                            </li>
                                        </ul>
                                    </div>
  <!--                             /.col-md-4  -->
                                    <div class="col-md-4">
                                        <a >
                                            <img src="../../public/assets/img/Ambiances/AMBIANCE-MAGASIN.jpg" alt="" class="img-fluid">
                                        </a>
                                        <p class="text-white">Short image call to action</p>
                                    </div>
  <!--                             /.col-md-4  -->
                                </div>
                            </div>
  <!--                      /.container  -->
                        </div>
                    </li>
                    <div>
                    <li class="nav-item">
                        <a class="nav-link" href="register.php">Contact</a>
                    </li>
            </div>
            <form class="form-inline">
             <?php if (!isset($_SESSION['auth']['login'])) { ?>
                <a class="btn btn-danger mr-2" href="../Controllers/useconnectController.php" title="connectes-toi !">
                    <i class="fa fa-user" aria-hidden="true"></i> Connectes-toi !</a>
            <?php } else { ?>
                <a  href="../Controllers/profilController.php" class="btn btn-secondary bonjour text-white font-weight-bold display-4 mr-1">Bonjour <?= ucfirst(strip_tags($_SESSION['auth']['lastname'])) ?> </a>
                <a href="../Controllers/logoutController.php" class="btn btn-secondary mr-1"><i class="fas fa-sign-out-alt">Déconnexion</i></a>
            <?php } ?>
	                     <input class="form-control ml-5-sm-2" type="search" placeholder="Rechercher" aria-label="Search">
                             <div>
	                     <button class="btn btn-outline-secondary ml-2" type="submit">Valider</button>
                             </div>
	                  </form>
            </div>
            <div>
             
            </div>
            </div>
        </nav>