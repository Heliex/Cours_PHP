<?php
// La boucle "foreach"

/**
 * Boucle qui permet de parcourir les éléments d’un tableau ou d’un objet
 * Utilisez la boucle foreach pour parcourir les éléments d'un tableau ou d'un objet sans avoir à gérer manuellement les index ou les clés.
 * La boucle foreach simplifie le traitement des collections en permettant d'accéder directement aux valeurs (et éventuellement aux clés).
 * Cas d'utilisation : Afficher les noms des étudiants d'une classe.
 **/

$students = ["Alice", "Bob", "Charlie", "David"];

// Accès classique
foreach ($students as $student) {
    echo "Étudiant : $student\n";
}

// Avec accès aux clés (indice)
foreach ($students as $key => $student) {
    echo "Étudient à la clé : " . $key . ', valeur : ' . $student ."\n";
}

?>