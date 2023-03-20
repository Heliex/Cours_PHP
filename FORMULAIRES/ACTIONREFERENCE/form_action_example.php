<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemple de formulaire avec action définie et auto-référencé</title>
</head>
<body>
<h1>Exemple de formulaire avec action définie et auto-référencé</h1>

<h2>Formulaire avec action définie</h2>
<form action="defined_action.php" method="POST">
    <label for="namedefined">Nom :</label>
    <input type="text" name="name" id="namedefined" required>
    <br>
    <label for="emaildefined">E-mail :</label>
    <input type="email" name="email" id="emaildefined" required>
    <br>
    <button type="submit">Envoyer</button>
</form>

<h2>Formulaire auto-référencé</h2>
<form action="" method="POST">
    <label for="nameself">Nom :</label>
    <input type="text" name="name" id="nameself" required>
    <br>
    <label for="emailself">E-mail :</label>
    <input type="email" name="email" id="emailself" required>
    <br>
    <button type="submit">Envoyer</button>
</form>

<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = $_POST["name"];
        $email = $_POST["email"];

        echo "<h3>Données soumises par le formulaire auto-référencé</h3>";
        echo "Nom : " . htmlspecialchars($name) . "<br>";
        echo "E-mail : " . htmlspecialchars($email) . "<br>";
    }
?>
</body>
</html>
