<?php

/**
 * L'opérateur logique NOT (!), dispose de la table de vérité suivante :
 *           A | Sortie (NON A)
 *           --+---+
 * Cas N°1 : 0 | 1
 * Cas N°2 : 1 | 0
 */

// Cas N°1
$a = false;

echo "!a => " . (!$a)."\n"; // true

// Cas N°2
$a = true;

echo "!a => " . (!$a)."\n"; // false

?>