<?php
session_start();
require_once 'User.php';
require_once 'Database.php';

$db = Database::connect();

$user = new User($db);

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $userInfo = $user->checkCredentials($email);

    if ($userInfo) {
        $_SESSION['user'] = $userInfo;
        header('Location: index.php');
    } else {
        $error = "Email invalide.";
    }
}

if (isset($_GET['logout'])) {
    session_destroy();
    header('Location: login.php');
}
?>

<!-- formulaire de connexion -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
</head>
<body>
<h1>Connexion</h1>

<?php if (isset($error)): ?>
    <p><?php echo $error; ?></p>
<?php endif; ?>

<form method="post" action="login.php">
    <label for="email">Email :</label>
    <input type="email" name="email" id="email" required>
    <br>
    <input type="submit" name="login" value="Se connecter">
</form>
</body>
</html>