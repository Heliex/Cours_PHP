<?php
session_start();

if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit;
}

require_once 'User.php';

$user = new User($db);

// Récupérer l'utilisateur à modifier
if (isset($_GET['id'])) {
    $user_id = $_GET['id'];
    $user_data = $user->getUserById($user_id);

    if (!$user_data) {
        header('Location: index.php');
        exit;
    }
} else {
    header('Location: index.php');
    exit;
}

// Mettre à jour les informations de l'utilisateur
if (isset($_POST['update_user'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];

    $user->updateUser($user_id, $first_name, $last_name, $email);
    header('Location: index.php');
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Modifier l'utilisateur</title>
</head>
<body>
<h1>Modifier l'utilisateur</h1>

<!-- Formulaire de modification d'utilisateur -->
<form method="post" action="edit_user.php?id=<?php echo $user_id; ?>">
    <label for="first_name">Prénom :</label>
    <input type="text" name="first_name" id="first_name" value="<?php echo $user_data['first_name']; ?>" required>
    <br>
    <label for="last_name">Nom :</label>
    <input type="text" name="last_name" id="last_name" value="<?php echo $user_data['last_name']; ?>" required>
    <br>
    <label for="email">Email :</label>
    <input type="email" name="email" id="email" value="<?php echo $user_data['email']; ?>" required>
    <br>
    <input type="submit" name="update_user" value="Mettre à jour">
</form>

<a href="index.php">Retour à la liste des utilisateurs</a>
</body>
</html>