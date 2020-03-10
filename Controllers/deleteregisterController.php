<?php
session_start();
require_once '../Models/User.php';
require_once '../Models/DataBase.php';
$users = new users();

$users->id = $_SESSION['auth']['id'];
 
  try {
    
    $users->delete();
    $_SESSION['deleteUser']['success'] = true;
    $_SESSION['deleteUser']['name'] = $users->firstname. ' ' .$users->lastname;
  } catch (PDOException $e){
      $_SESSION['deleteUser']['success'] = false;
  }
    
 
  $sleep = 4;
  session_destroy();
  header('Refresh:' . $sleep . ';http://'.$_SERVER['HTTP_HOST'].'/Controllers/connexionController.php');


//chargement du front
require_once '../Views/deleteprofil.php';