<?php
require_once '../../PDO.php';
include '../Commons/header.php';
function getProductsFromStatus($idstatus)
{
  $db = connectDb();
  $stmt = $db->prepare('SELECT * FROM `products`');
  $stmt->execute();
  $product = $stmt->fetchAll(PDO::FETCH_ASSOC);
  $stmt->closeCursor();
}
