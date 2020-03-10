<?php
session_start();
require_once '../Models/User.php';
require_once '../Models/Database.php';
// si aucune variable de session n'existe, on renvoi vers la page pour se logguer
if (!isset($_SESSION['auth']['id'])){
    header('Location: http://'.$_SERVER['HTTP_HOST'].'/Controllers/registerController.php');
}

$errors = [];
$nameRegex = '/\w+/';
//creation de l'objet user
    $user = new user();
// recuperation du profil en cours grace à l'id
    $users->id= $_SESSION['auth']['id'];
    $users->getOne();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //variables de formulaires disponnibles
    $isSubmit = true;
    // recupération du nom, on indique si format incorrecte
    $firstname = trim(filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_STRING));
            if (empty($firstname) || !preg_match($nameRegex, $firstname)) {
                $errors['firstname'] = 'Le prénom est invalide !';
            }
    // recuperation du prenom, on indique si format incorrecte
    $lastname = trim(filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_STRING));
            if (empty($lastname) || !preg_match($nameRegex, $lastname)) {
                $errors['lastname'] = 'Le nom est invalide !';
            }

    // recuperation du mail, on indique si format incorrecte
    $email = trim(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING));     
    if (empty($email) || !filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'Le mail est invalide !';
    }
    // vérification de la disponniblité du mail, si il existe dans la base, on l'indique
    $user->email = $email;
    if (!$user->checkEmail()) {
        $errors['email'] = 'Le mail existe déjà!';
    }    
    // si aucune erreur dans le formulaire, on met à jour les données, sinon on recharge le formulaire en indiquant les erreurs
    if ($isSubmit && count($errors) == 0) { // 
        $user->firstname = $firstname;
        $user->lastname = $lastname;
        $user->email = $email;
        //$users->password = $password;
        if (!$user->update()) {
            require_once '../Views/errors/503.php';
            exit();
        }
        $success = true;
        $sleep = 4;
        session_destroy();
        header('Refresh:' . $sleep . ';http://'.$_SERVER['HTTP_HOST'].'/Controllers/registerController.php');
        }

}
else{
    
}
//chargement du front
require_once '../Views/profil.php';

?>