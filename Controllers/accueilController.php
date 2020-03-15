<?php
session_start();
require_once '../Models/User.php';
require_once '../Models/Database.php';

// protection de la page par la session auth
// if(!isset($_SESSION['auth']['login'])){
//     header('Location: ../Controllers/useconnectController.php');
//     exit();
// }
require_once '../Views/accueil.php';