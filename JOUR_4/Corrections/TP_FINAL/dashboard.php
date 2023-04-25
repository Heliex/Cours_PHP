<?php

require_once './Database.php';
require_once './User.php';

session_start();

if (!isset($_SESSION['user_email'])) {
    header('Location: login.php');
    exit;
}

$db = (new Database())->connect();
$user = new User($db);

$current_user = $user->getUserByEmail($_SESSION['user_email']);
$users = $user->getAllUsers();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de bord</title>
</head>
<body>
<h1>Bienvenue, <?php echo $current_user['first_name'] . ' ' . $current_user['last_name']; ?>!</h1>
<h2>Liste des utilisateurs:</h2>
<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Prénom</th>
        <th>Nom</th>
        <th>Email</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($users as $user): ?>
        <tr>
            <td><?php echo $user['id']; ?></td>
            <td><?php echo $user['first_name']; ?></td>
            <td><?php echo $user['last_name']; ?></td>
            <td><?php echo $user['email']; ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
<a href="logout.php">Déconnexion</a>
</body>
</html>
