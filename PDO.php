<?php
require_once '/Config/config.php';
?>
 <!-- Lier le fichier parameter.php à l'index.php -->
<?php
function connectDb() {
      $dsn = 'mysql:dbname=' . DB . ';host=' . HOST;
      try {
 return $db = new PDO($dsn, USER, PASSWD);
      } catch (Exception $ex) {
        die('La connexion à la bd a échoué !');
      }
    }

