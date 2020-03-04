<?php
require_once 'PDO.php';
include 'pages/Commons/header.php';

$db = connectDb();
$stmt = $db->prepare('SELECT * FROM `products`');
$stmt->execute();
$product = $stmt->fetchAll(PDO::FETCH_ASSOC);
$stmt->closeCursor();
?>
<!-- Section: Content-->
<?php foreach ($product as $products){
  echo $products['item'];
  // code...
}
?>

