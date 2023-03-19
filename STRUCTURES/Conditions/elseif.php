<?php
// Bloc de condition "elseif"

/**
 * Teste une autre condition si la condition précedente n’est pas vraie.
 * Utilisez la condition elseif pour tester plusieurs conditions les unes après les autres et exécuter le bloc de code correspondant à la première condition vraie.
 * La condition elseif est utilisée en combinaison avec if et, éventuellement, else.
 * Cas d'utilisation : Appliquer des tarifs différents en fonction de l'âge d'un utilisateur.
 */

$age = 8;

if ($age < 12) {
    echo "Tarif enfant";
} elseif ($age < 18) {
    echo "Tarif jeune";
} else {
    echo "Tarif adulte";
}

?>