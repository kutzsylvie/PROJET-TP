<?php
require_once '../../config.php';
include '../../Views/header.php';
?>
<!-- se connecter à la base de données -->
<?php
  $db = connectDb();
  $stmt = $db->prepare('SELECT * FROM `products`');
  $stmt->execute();
  $product = $stmt->fetchAll(PDO::FETCH_ASSOC);
  $stmt->closeCursor();
?>
  <!--Section: Content-->
  <section class="dark-grey-text border-none text-center">
    <!-- Section heading -->
    <h2 class="font-weight-bold mb-5 pb-5">Les bougies</h2>
    <h4 class="mt-5">N'hesitez pas à utiliser notre service RESERVATION</h4>
    <p class="card-text"> Si vous le souhaitez vous pouvez reserver tout nos articles pendant 24h.
      Ils attendront bien sagement à la boutique que vous veniez les chercher.<br>
      Passé ce délai ils seront automatiquement remis en rayon</p>

  <div class="container my-5">
    <!-- pour recupérer les produits-->
    <div class="row">
       <?php foreach ($product as $products) : ?> <!-- pour récupérer les images des produits -->
      <?php
      $stmt = $db->prepare('
        SELECT `item`,`description`,`url`, `alt`
        FROM `products` 
        WHERE idProducts = :id_Products
        LIMIT 1
      ');
      $stmt->bindValue(':id_Products',$products['idProducts']);
      $stmt->execute();
      $pictures = $stmt->fetch(PDO::FETCH_ASSOC);
      $stmt->closeCursor();
    ?>
      <!-- Section description -->
      <!-- Grid row -->
      <div class="row">
        <!-- Grid column -->
        <div class="col-md-10">
          <!-- Card -->
          <div class="card ">
            <!-- Card image -->
            <div class="view overlay">
              <img src="../../public/assets/img/<?= $pictures['url'] ?>" class="card-img-top "
                alt=<?= $pictures['alt'] ?>>
                          </div>
            <!-- Card image -->
            <!-- Card content -->
            <div class="card-body text-center pb-3">
              <!-- Title -->
              <h5 class="card-title mb-1">
                <strong>
                  <!-- on récupére le nom de l'article dans la base products -->
                  <a><?= $products['item'] ?></a>
                </strong>
              </h5>
              <!-- Description -->
              <p class="card-text"><?= $products['description'] ?></p>
              <!-- Card footer -->
              <div class="card-footer">
                <div class="row">
                  <div class="col-md-6 justify-content-center">
                    <a href=" " class="material-tooltip-main" data-toggle="tooltip" data-placement="top"
                      title="Add to Cart">
                      <i class="fas fa-shopping-cart grey-text ml-3"></i>
                    </a>
                    <p class="resa ml-3">Réserver<p>
                  </div>
                  <div class="col-md-6 justify-content-center">
                    <a href="" class="material-tooltip-main" data-toggle="tooltip" data-placement="top"
                      title="Add to Wishlist">
                      <i class="fas fa-heart grey-text ml-3"></i>
                    </a>
                    <p class="resa ml-3">Favoris</p>
                  </div>
                </div>
              </div>
            </div>

            <!-- Card content -->
          </div>

          <!-- Card -->
        </div>
      </div>
    <?php endforeach; ?>
    </div>    
  </section>
       </div>
    <div class='border'>
      <?php include '../../Views/footer.php'; ?>
    </div>