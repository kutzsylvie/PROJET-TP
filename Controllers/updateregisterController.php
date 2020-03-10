<?php
session_start();
require_once '../Models/User.php';
require_once '../Models/DataBase.php';
$firstname = $lastname = $major = $email = $password = $password_confirmation = $conditions = '';
$errors = [];
$nameRegex = '/\w+/';
$passwordRegex = '/^(?=.*[\d])(?=.*[A-Z])(?=.*[a-z])(?=.*[!@#$%^&*])?[\w!@#$%^&*]{8,}$/';

//Création d'un nouvel objet user
$users = new users();
// chargement de l'user en cours
$users->id= $_SESSION['auth']['id'];

//On vérifie si le formulaire de mise à jour a été posté (POST)
if ($isSubmit && count($errors) == 0) {
    $users->firstname = 'ee';//$firstname;
    $users->lastname = $lastname;
    $users->mail = $mail;
    $users->password = $users->password;
    if (!$users->update()) {
        require_once '../Views/errors/503.php';
        exit();
    }
    $success = true;
    $sleep = 4;
    header('Refresh:' . $sleep . ';http://'.$_SERVER['HTTP_HOST'].'/Controllers/connexionController.php');
    }

require_once '../Views/updateprofil.php';
