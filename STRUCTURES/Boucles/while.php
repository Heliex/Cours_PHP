<?php
// La boucle "while"

/**
 * Boucle qui s’exécute tant qu’une condition est vraie
 * Utilisez la boucle while pour répéter un bloc de code tant qu'une condition spécifique est vraie.
 * La boucle while est utile lorsque vous ne connaissez pas le nombre exact d'itérations à l'avance, mais que vous avez une condition d'arrêt.
 * Cas d'utilisation : Trouver le premier multiple de 7 supérieur à un nombre donné.
 **/

$number = 25;

while ($number % 7 != 0) {
    $number++;
}

echo "Le premier multiple de 7 supérieur à 25 est : $number";

?>