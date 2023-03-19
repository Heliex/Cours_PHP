<?php
// Bloc de condition "else"

/**
 * Exécute un bloc de code si la condition precedente n’est pas vraie.
 * Utilisez la condition else en combinaison avec if pour exécuter un bloc de code si la condition spécifiée dans le if est fausse.
 * Cela permet de définir un comportement alternatif lorsque la condition n'est pas satisfaite.
 * Cas d'utilisation : Afficher un message en fonction de l'âge d'un utilisateur.
 */

$age = 17;

if ($age >= 18) {
    echo "Vous êtes majeur.";
} else {
    echo "Vous êtes mineur.";
}

?>