<?php
session_start();

if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit;
}

require_once 'User.php';
require_once 'Database.php';

$db = Database::connect();

$user = new User($db);

// Gestion des cookies pour la langue préférée
if (isset($_POST['set_language'])) {
    setcookie('language', $_POST['language'], time() + (86400 * 30), '/');
    header('Location: index.php');
}

$language = isset($_COOKIE['language']) ? $_COOKIE['language'] : 'en';

// Ajouter un utilisateur
if (isset($_POST['add_user'])) {
    $user->createUser($_POST['first_name'], $_POST['last_name'], $_POST['email']);
}

// Modifier un utilisateur
if (isset($_POST['update_user'])) {
    $user->updateUser($_POST['id'], $_POST['first_name'], $_POST['last_name'], $_POST['email']);
}

// Supprimer un utilisateur
if (isset($_GET['delete_user'])) {
    $user->deleteUser($_GET['delete_user']);
}

$users = $user->getAllUsers();
?>

<!-- Formulaire pour stocker le cookie de la langue -->
<form method="post" action="index.php">
    <label for="language">Langue :</label>
    <select name="language" id="language">
        <option value="en" <?php echo ($language == 'en') ? 'selected' : ''; ?>>Anglais</option>
        <option value="fr" <?php echo ($language == 'fr') ? 'selected' : ''; ?>>Français</option>
        <!-- Ajoutez d'autres langues si nécessaire -->
    </select>
    <input type="submit" name="set_language" value="Changer la langue">
</form>

<h1>Gestion des utilisateurs</h1>

<!-- Formulaire d'ajout d'utilisateur -->
<h2>Ajouter un utilisateur</h2>
<form method="post" action="index.php">
    <label for="first_name">Prénom :</label>
    <input type="text" name="first_name" id="first_name" required>
    <br>
    <label for="last_name">Nom :</label>
    <input type="text" name="last_name" id="last_name" required>
    <br>
    <label for="email">Email :</label>
    <input type="email" name="email" id="email" required>
    <br>
    <input type="submit" name="add_user" value="Ajouter">
</form>

<!-- Liste des utilisateurs -->
<h2>Liste des utilisateurs</h2>
<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Prénom</th>
        <th>Nom</th>
        <th>Email</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($users as $user) : ?>
        <tr>
            <td><?php echo $user['id']; ?></td>
            <td><?php echo $user['first_name']; ?></td>
            <td><?php echo $user['last_name']; ?></td>
            <td><?php echo $user['email']; ?></td>
            <td>
                <a href="edit_user.php?id=<?php echo $user['id']; ?>">Modifier</a> |
                <a href="index.php?delete_user=<?php echo $user['id']; ?>">Supprimer</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

<!-- Bouton "Se déconnecter" -->
<a href="login.php?logout">Se déconnecter</a>