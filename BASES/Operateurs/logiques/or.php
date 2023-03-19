<?php

/**
 * L'opérateur logique OR (||), dispose de la table de vérité suivante :
 *           A | B | Sortie (A OU B)
 *           --+---+--------------
 * Cas N°1 : 0 | 0 | 0
 * Cas N°2 : 0 | 1 | 1
 * Cas N°3 : 1 | 0 | 1
 * Cas N°4 : 1 | 1 | 1
 */

// Cas N°1
$a = false;
$b = false;

echo "a || b => " . ($a || $b)."\n"; // false

// Cas N°2
$a = false;
$b = true;

echo "a || b => " . ($a || $b)."\n"; // true

// Cas N°3
$a = true;
$b = false;

echo "a || b => " . ($a || $b)."\n"; // true

// Cas N°4
$a = true;
$b = true;

echo "a || b => " . ($a || $b)."\n"; // true

?>