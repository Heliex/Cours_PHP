<?php

/**
 * L'opérateur spaceship (<=>) est un opérateur de comparaison introduit dans PHP 7.
 * Il permet de comparer deux valeurs et renvoie un résultat en fonction de leur relation.
 * L'opérateur spaceship est également connu sous le nom d'opérateur de comparaison à trois branches.
 * Voici comment il fonctionne :
 *  - Si la valeur à gauche de l'opérateur est inférieure à celle de droite, l'opérateur renvoie -1.
 *  - Si la valeur à gauche de l'opérateur est égale à celle de droite, l'opérateur renvoie 0.
 *  - Si la valeur à gauche de l'opérateur est supérieure à celle de droite, l'opérateur renvoie 1.
 */
$a = 10;
$b = 20;

$result = $a <=> $b;

echo "$result\n"; // Affiche -1 car $a < $b

$c = 0;
$d = 0;

$result = $c <=> $d;

echo "$result\n"; // Affiche 0 car $c === $d

$result = $b <=> $a;

echo "$result\n"; // Affiche 1 car $b > $a

?>