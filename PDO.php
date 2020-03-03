<?php
include 'header.php';
// Lier le fichier parameter.php à l'index.php
function connectDb() {
      require_once 'config.php';
      $dsn = 'mysql:dbname=' . DB . ';host=' . HOST;
      try {
        $db = new PDO($dsn, USER, PASSWD);
        return $db;
      } catch (Exception $ex) {
        die('La connexion à la bd a échoué !');
      }
    }
?>
<div class='border'>
  <?php include 'footer.php'; ?>
</div>
