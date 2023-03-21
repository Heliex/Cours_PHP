<?php
// Démarrer la session
session_start();

// Vérifier si l'utilisateur est connecté (en vérifiant les sessions et les cookies)
if (!isset($_SESSION['username']) && !isset($_COOKIE['username'])) {
    // Rediriger vers la page de connexion si l'utilisateur n'est pas connecté
    header("Location: index.php");
    exit;
}

// Récupérer le nom d'utilisateur à partir de la session ou du cookie
$username = isset($_SESSION['username']) ? $_SESSION['username'] : $_COOKIE['username'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Bienvenue</title>
</head>
<body>
<!-- Afficher un message de bienvenue avec le nom d'utilisateur -->
<h1>Bienvenue, <?php echo htmlspecialchars($username); ?> !</h1>

<!-- Lien pour se déconnecter -->
<p><a href="logout.php">Déconnexion</a></p>
</body>
</html>
