<?php
// Opérateur null coallescent (depuis PHP 7.4)

$variable = null; // int

// Ceci
if(null !== $variable) {
    echo $variable."\n";
} else {
    echo "OTHER THING\n";
}

// S'écrit comme cela en version coallescent
echo ($variable ?? 'OTHER THING')."\n"; // Va afficher 'other thing' car l'opérateur '??' contrôle si la valeur est null

// On affecte quelque-chose à variable
$variable = 40;
echo ($variable ?? 'OTHER THING')."\n"; // Va afficher '40'

?>