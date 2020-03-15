<!-- connecting to DB -->
<?php
// define('USER', 'sylvie');
// define('PASSWORD', 'zoya');
// define('HOST','localhost');
// define('DB','graines');

define('USER', 'c9am_sylviek');
define('PASSWORD', 'bxFnAjdJ_33YP');
define('HOST','54.37.71.121');
define('DB','c36grainesdinterieur');
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