<?php

require_once './Database.php';
require_once './User.php';

session_start();

$db = (new Database())->connect();
$user = new User($db);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if ($user->checkCredentials($email, $password)) {
        $_SESSION['user_email'] = $email;
        header('Location: dashboard.php');
    } else {
        echo 'Email ou mot de passe incorrect.';
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>
<body>
<h1>Connexion</h1>
<form action="login.php" method="post">
    <label for="email">Email:</label>
    <input type="email" name="email" id="email" required><br>
    <label for="password">Mot de passe:</label>
    <input type="password" name="password" id="password" required><br>
    <button type="submit">Connexion</button>
</form>
</body>
</html>
