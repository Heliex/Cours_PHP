<?php
$name = $_POST["name"];
$email = $_POST["email"];

echo "<h1>Données soumises par le formulaire avec action définie</h1>";
echo "Nom : " . htmlspecialchars($name) . "<br>";
echo "E-mail : " . htmlspecialchars($email) . "<br>";
?>
