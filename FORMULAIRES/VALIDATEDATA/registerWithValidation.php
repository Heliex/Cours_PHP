<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
</head>
<body>
<h1>Formulaire d'inscription</h1>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $password_confirm = trim($_POST['password_confirm']);
    $errors = [];

    // Vérification des champs obligatoires
    if (empty($username)) {
        $errors[] = "Le nom d'utilisateur est obligatoire.";
    }
    if (empty($email)) {
        $errors[] = "L'adresse e-mail est obligatoire.";
    }
    if (empty($password)) {
        $errors[] = "Le mot de passe est obligatoire.";
    }
    if (empty($password_confirm)) {
        $errors[] = "La confirmation du mot de passe est obligatoire.";
    }

    // Vérification de l'adresse e-mail
    if (!empty($email) && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "L'adresse e-mail est invalide.";
    }

    // Vérification de la correspondance des mots de passe
    if (!empty($password) && !empty($password_confirm) && $password !== $password_confirm) {
        $errors[] = "Les mots de passe ne correspondent pas.";
    }

    // Affichage des erreurs
    if (!empty($errors)) {
        echo "<ul>";
        foreach ($errors as $error) {
            echo "<li>$error</li>";
        }
        echo "</ul>";
    } else {
        // Traiter les données valides ici
        echo "Inscription réussie!";
    }
}
?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <label for="username">Nom d'utilisateur :</label>
    <input type="text" name="username" id="username" required><br><br>
    <label for="email">Adresse e-mail :</label>
    <input type="email" name="email" id="email" required><br><br>
    <label for="password">Mot de passe :</label>
    <input type="password" name="password" id="password" required><br><br>
    <label for="password_confirm">Confirmation du mot de passe :</label>
    <input type="password" name="password_confirm" id="password_confirm" required><br><br>
    <input type="submit" value="S'inscrire">
</form>
</body>
</html>
