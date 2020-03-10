<?php
//Constante magique pour donner le chemin absolu
require_once dirname(__FILE__).'/../home/header.php';
require_once dirname(__FILE__).'/../home/nav.php';
?>
<h1>Une erreur est survenue lors de la modification</h1>
<p>Veuillez contacter l'administrateur du site</p>
<a href="../../Controllers/updateprofilController.php">Retour à votre profil</a>
<?php
require_once dirname(__FILE__).'/../home/footer.php';