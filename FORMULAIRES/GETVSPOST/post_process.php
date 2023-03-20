<?php
$name = $_POST["name"];
$email = $_POST["email"];

echo "<h1>Données soumises avec la méthode POST</h1>";
echo "Nom : " . htmlspecialchars($name) . "<br>";
echo "E-mail : " . htmlspecialchars($email) . "<br>";
?>
