<?php
session_start();
require_once 'User.php';

$user = new User($db);

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $userInfo = $user->checkCredentials($email);

    if ($userInfo) {
        $_SESSION['user'] = $userInfo;
        header('Location: index.php');
    } else {
        $error = "Email invalide.";
    }
}

if (isset($_GET['logout'])) {
    session_destroy();
    header('Location: login.php');
}
?>

<!-- Votre code HTML pour le formulaire de connexion -->
