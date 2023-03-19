<?php
// La boucle "do while"

/**
 * Boucle qui s’exécute au moins une fois et continue tant qu’une condition est vraie
 * Utilisez la boucle do-while pour exécuter un bloc de code au moins une fois, puis répéter l'exécution tant qu'une condition spécifique est vraie.
 * La boucle do-while est similaire à la boucle while, mais elle garantit qu'au moins une itération sera effectuée, même si la condition est initialement fausse.
 * Cas d'utilisation : Demander un mot de passe à l'utilisateur jusqu'à ce qu'il saisisse un mot de passe correct.
 **/

do {
    $password = readline("Entrez le mot de passe :");
} while ($password != "password123");

echo "Mot de passe correct !";

?>