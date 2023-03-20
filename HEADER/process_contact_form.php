<?php
session_start(); // Assurez-vous de démarrer la session en haut du fichier

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    // Stockez les données du formulaire dans des variables de session
    $_SESSION["name"] = $name;
    $_SESSION["email"] = $email;
    $_SESSION["message"] = $message;

    // Redirigez l'utilisateur vers la page de confirmation
    header("Location: confirmation.php");
    exit;
}
?>
