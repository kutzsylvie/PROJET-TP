<?php
require_once 'PDO.php';
require_once 'config.php';
include 'header.php';
?>

<?php
$db = connectDb();
$stmt = $db->prepare('SELECT * FROM `GRAINES`');
$stmt ->execute();
$resultats = $stmt->fetchAll(PDO::FETCH_ASSOC);
$stmt ->closeCursor();

echo'<pre>';
print_r($resultats);
?>
<div class='border'>
  <?php include 'footer.php'; ?>
</div>
