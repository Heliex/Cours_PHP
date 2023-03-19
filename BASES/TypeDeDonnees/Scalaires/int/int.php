<?php

$var = 42; // int

echo "$var\n";

/**
 * Normalement la range pour un système 32 bits :
 *  -     Valeur min : -2,147,483,648 (i.e., -2^31)
 *  -     Valeur max : 2,147,483,647 (i.e., 2^31 - 1)
 */

/**
 * Normalement la range pour un système 64 bits
 *  -     Valeur min : -9,223,372,036,854,775,808 (i.e., -2^63)
 *  -     Valeur max : 9,223,372,036,854,775,807 (i.e., 2^63 - 1)
 */

// Afficher les valeurs maximales que PHP prends en charge pour les entiers :
echo 'Minimum int value: ' . PHP_INT_MIN . "\n";
echo 'Maximum int value: ' . PHP_INT_MAX . "\n";


?>