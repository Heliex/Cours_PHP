<?php
// Démarrer la session
session_start();

// Récupérer les données du formulaire de connexion
$username = $_POST['username'];
$password = $_POST['password'];

// Fonction pour vérifier si un utilisateur est valide
function is_valid_user($username, $password) {
    // Lire le contenu du fichier users.txt
    $users = file("users.txt");

    // Parcourir chaque ligne du fichier
    foreach ($users as $user) {
        // Séparer le nom d'utilisateur et le mot de passe
        list($user_username, $user_password) = explode(",", trim($user));

        // Vérifier si le nom d'utilisateur et le mot de passe correspondent
        if ($user_username == $username && $user_password == $password) {
            return true;
        }
    }

    // Si aucune correspondance n'est trouvée, retourner false
    return false;
}

// Si l'utilisateur est valide
if (is_valid_user($username, $password)) {
    // Stocker le nom d'utilisateur dans la session
    $_SESSION['username'] = $username;

    // Créer un cookie avec le nom d'utilisateur (expire dans 30 jours)
    setcookie('username', $username, time() + (86400 * 30), '/');

    // Rediriger vers la page de bienvenue
    header("Location: welcome.php");
} else {
    // Rediriger vers la page de connexion si l'authentification échoue
    header("Location: index.php");
}
?>
