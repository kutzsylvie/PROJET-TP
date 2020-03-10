<?php
define('USER', 'sylvie');
define('PASSWORD', 'zoya');
define('HOST','localhost');
define('DB','graines');

function connectDb() {
    $dsn = 'mysql:dbname=' . DB . ';host=' . HOST;
    try {
 $db = new PDO($dsn, USER, PASSWORD,['PDO::ATTR_ERRMODE'=> 'PDO::ERRMODE_EXCEPTION'] );
 return $db;
    } catch (Exception $ex) {
      die('La connexion à la bd a échoué !');
    }
  }
  ?>