<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_confirmation = $_POST['password_confirmation'];
    $error_message = '';

    if ($password !== $password_confirmation) {
        $error_message = 'Les mots de passe ne correspondent pas.';
    }

    if (!empty($error_message)) {
        echo '<h3>' . $error_message . '</h3>';
        echo '<a href="inscription.html">Retour au formulaire</a>';
    } else {
        echo '<h3>Inscription réussie !</h3>';
        echo '<p>Nom d\'utilisateur : ' . htmlspecialchars($username) . '</p>';
        echo '<p>E-mail : ' . htmlspecialchars($email) . '</p>';
    }
}
?>
