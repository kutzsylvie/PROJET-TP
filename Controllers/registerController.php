<?php
require_once  '../Models/Database.php';
require_once '../Models/User.php';
 $lastname =$firstname = $email  = $phone = $password = $id_role = '';
$errors = [];
$nameRegex = '/\w+/';
$passwordRegex = '/^(?=.*[\d])(?=.*[A-Z])(?=.*[a-z])(?=.*[!@#$%^&*])?[\w!@#$%^&*]{8,}$/';
$regexDate = "/^((?:19|20)[0-9]{2})-(0[1-9]|1[0-2])-(0[1-9]|[12][0-9]|3[01])$/";
$regexTel = "/^0[67](\.[0-9]{2}){4}$/";
if(isset($_POST['checkmail'])){
     $email = trim(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING));
    if (filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)) {
        $user = new User();
        $user->email = $email;
        if($user->checkEmail()){
            exit('notOk');
        }
        exit('ok');
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $isSubmit = true;
    //verif champ prénom
    $firstname = trim(filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_STRING));
    if (empty($firstname) || !preg_match($nameRegex, $firstname)) {
        $errors['firstname'] = 'Le prénom est invalide !';
    }
     //verif champ nom
    $lastname = trim(filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_STRING));
    if (empty($lastname) || !preg_match($nameRegex, $lastname)) {
        $errors['lastname'] = 'Le nom est invalide !';
    }
    // //verif champ date d'anniversaire
    // $birthdate = trim(filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_STRING));
    // if (empty($birthdate) || !preg_match($nameRegex, $lastname)) {
    //     $errors['birthdate'] = 'La date de naissance est invalide !';
    // }
    //verif champ date mail
    $email = trim(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING));
    if (empty($email) || !filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'Le mail est invalide !';
    }
   
    //verif champ mobile
    $phone = trim(htmlspecialchars($_POST['phone']));
    if (empty($phone)) {
        $errors['phone'] = 'Veuillez renseigner votre téléphone';
    } elseif (!preg_match($regexTel, $phone)) {
        $errors['phone'] = 'Le format du téléphone n\'est pas valide!';
    }
     //verif champ password
    $password = trim($_POST['password']);
    if (empty($password) || !preg_match($passwordRegex, $password)) {
        $errors['password'] = 'Le mot de passe doit comporter au moins 8 caractères !';
    }
     //verif champ password
    $password_confirmation = trim($_POST['password_confirmation']);
    if (empty($password) || $password != $password_confirmation) {
        $errors['password_confirmation'] = 'Les mots de passe sont differents !';
    }
    if (!isset($_POST['terms'])) {
        $errors['terms'] = 'Veuillez accepter les conditions d\'utilisation !';
    }

    if (count($errors) == 0) {
        $user = new User( $lastname, $firstname, $email,$phone, password_hash($password, PASSWORD_BCRYPT));
        try {
            $user->create();
            $success = true;
            $sleep = 4;
            header('Refresh:' . $sleep . ';http://'.$_SERVER['HTTP_HOST'].'/Controllers/useconnectController.php');
        } catch (PDOException $ex) {
            echo 'La création du compte a échouée !' . $ex->getMessage();
            die();
        }
    }
}

require_once '../Views/register.php';
