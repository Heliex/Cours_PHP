<?php
// Démarrer la session
session_start();

// Vider toutes les variables de session
session_unset();

// Détruire la session
session_destroy();

// Supprimer le cookie en définissant son temps d'expiration dans le passé
setcookie('username', '', time() - 3600, '/');

// Rediriger l'utilisateur vers la page de connexion
header("Location: index.php");
?>
