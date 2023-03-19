<?php

$var = 42.10; // float

echo "$var\n";

/**
 * Les valeurs sont maximales/minimales d'un nombre float, dépendent de la plateforme
 * En revanche, l'implémentation est basée sur le standard : IEEE 754
 *
 */

// Afficher les valeurs min/maximales que PHP prends en charge pour les nombres à virgules :
echo 'Valeur minimale d\'un float : ' . PHP_FLOAT_MIN . PHP_EOL;
echo 'Valeur maximale d\'un float : ' . PHP_FLOAT_MAX . PHP_EOL;
echo 'Epsilon, The smallest representable positive number x, such that x + 1.0 != 1.0 : ' . PHP_FLOAT_EPSILON . PHP_EOL;

?>