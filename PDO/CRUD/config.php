<?php
// Configuration de la connexion à la base de données
$dbHost = "localhost";
$dbUser = "username";
$dbPass = "password";
$dbName = "myapp";

// Connexion à la base de données
try {
    $db = new PDO("mysql:host={$dbHost};dbname={$dbName}", $dbUser, $dbPass);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Erreur de connexion: " . $e->getMessage();
}
