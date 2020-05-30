<?php
session_start();
require_once '../Models/User.php';
require_once '../Models/Database.php';
// verifie la cohérence du mail et du mot de passe
$email = $password = '';
$errors = [];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   $email = trim(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING));

    if (empty($email) || !filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)) {
        $errors['login'] = 'Le mail est invalide !';
    }
    $password = trim(filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING));
    if (count($errors) == 0) {
        $user = new User();

        try {
                // vérification que l'identifiant mail existe
                $user->email = $email;
                if ($user->checkEmail()) {
                    $user->getOne();
                    // controle du mot de passe, si ok, on charge le profil
                    if (password_verify($password, $user->password)) {
                        $_SESSION['auth']['login'] = true;
                        $_SESSION['auth']['idUsers'] = $user->idUsers;
                        $_SESSION['auth']['lastname'] = $user->lastname;
                        $_SESSION['auth']['firstname'] = $user->firstname;
                        header('Location:../Views/index.php');
                        exit();
                    } else {
                        $errors['login'] = 'l\'identifiant ou le mot de passe est incorrect !';
                    }
                } else {
                    $errors['login'] = 'l\'identifiant ou le mot de passe est incorrect !';
                }
        } catch (PDOException $ex) {
            $errors['login'] = 'Il y a eu un problème lors de la connexion à votre compte !';
        }
    }
}
require_once '../Views/useconnect.php';