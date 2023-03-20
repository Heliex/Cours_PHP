<?php
$name = $_GET["name"];
$email = $_GET["email"];

echo "<h1>Données soumises avec la méthode GET</h1>";
echo "Nom : " . htmlspecialchars($name) . "<br>";
echo "E-mail : " . htmlspecialchars($email) . "<br>";
?>
