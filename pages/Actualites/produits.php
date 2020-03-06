<?php
require_once '../../PDO.php';
include '../Commons/header.php';
?>
<!-- se connecter à la base de données -->
<?php

?>
<div class="container my-5">
<!--Section: Content-->
<section class="dark-grey-text border-none text-center">
  <!-- pour recupérer les produits-->
    <?php foreach ($product as $products) : ?>
<!-- pour récupérer les images des articles -->
<?php
$stmt = $db->prepare('SELECT * FROM `products`');
$stmt->execute();
$product = $stmt->fetchAll(PDO::FETCH_ASSOC);
$stmt->closeCursor();
?>
        <!-- Section heading -->
        <h3 class="font-weight-bold mb-4 pb-2">Les bougies</h3>
        <!-- Section description -->
        <p class="grey-text w-responsive mx-auto mb-5">.</p>
        <!-- Grid row -->
        <div class="row">
            <!-- Grid column -->
            <div class="col-lg-3 col-md-6 mb-4">
                <!-- Card -->
                <div class="card card-cascade narrower card-ecommerce">
                    <!-- Card image -->
                    <div class="view view-cascade overlay">
                        <img src="../pages/sources/img" class="card-img-top"
                             alt="parfum ambiance">
                        <a>
                           <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>
                    <!-- Card image -->
                    <!-- Card content -->
                    <div class="card-body card-body-cascade text-center pb-3">
                        <!-- Title -->
                        <h5 class="card-title mb-1">
                            <strong>
                              <!-- on récupére le nom de l'article dans la base products -->
                                <a href=""><?= $products['item'] ?></a>
                            </strong>
                        </h5>
                        <!-- Description -->
                        <p class="card-text"><?= $products['item'] ?></p>
                        <!-- Card footer -->
                        <div class="card-footer px-1">
                          <span class="float-right">
                            <a class="material-tooltip-main" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                              <i class="fas fa-shopping-cart grey-text ml-3"></i>
                            </a>
                            <a class="material-tooltip-main" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                              <i class="fas fa-heart grey-text ml-3"></i>
                            </a>
                          </span>
                        </div>
                      </div>
                      <!-- Card content -->
                    </div>
                    <!-- Card -->
                  </div>

                  <!-- Grid column -->
                </div>
                  <?php endforeach; ?>
              </div>
