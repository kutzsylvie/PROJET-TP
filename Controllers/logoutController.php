<?php
session_start();
// Deconnection
    $_SESSION['auth'] = [];
    session_destroy();
    header('Location:../Controllers/accueilController.php');
    exit();


