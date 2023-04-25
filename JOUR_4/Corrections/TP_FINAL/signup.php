<?php

require_once './Database.php';
require_once './User.php';

$db = (new Database())->connect();
$user = new User($db);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    try {
        $user->createUser($first_name, $last_name, $email, $password);
        header('Location: login.php');
    } catch (PDOException $e) {
        echo 'Erreur: ' . $e->getMessage();
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
</head>
<body>
<h1>Inscription</h1>
<form action="signup.php" method="post">
    <label for="first_name">Prénom:</label>
    <input type="text" name="first_name" id="first_name" required><br>
    <label for="last_name">Nom:</label>
    <input type="text" name="last_name" id="last_name" required><br>
    <label for="email">Email:</label>
    <input type="email" name="email" id="email" required><br>
    <label for="password">Mot de passe:</label>
    <input type="password" name="password" id="password" required><br>
    <button type="submit">Inscription</button>
</form>
</body>
</html>
