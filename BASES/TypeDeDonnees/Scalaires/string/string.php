<?php

$var = 'coucou'; // string

echo "$var\n";

/**
 * Contrairement au deux types precedents, le type string n'a pas vraiment de limite, car c'est la mémoire disponible qui va déterminer le stockage de la chaine de caractère.
 * Pour savoir la mémoire maximale qu'une string peut prendre, on peut afficher la valeur : MEMORY_LIMIT
 */

echo 'Current memory limit: ' . ini_get('memory_limit') . PHP_EOL;


?>