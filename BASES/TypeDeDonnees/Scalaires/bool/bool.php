<?php

$var = true ; // bool
$var2 = false; // Bool

echo "$var\n"; // Renvoie "1"
echo "$var2\n"; // Renvoie un truc bizarre ?

// pour vérifier que var2 est bien un bool, on peut utiliser var_dump
var_dump($var2);

// Aussi, comme PHP est un langage faiblement typé, si on utilise un int (ou autre), il aura une valeur dite "truthy"
$int = 42;
if($int) { // $int est considéré comme vrai
    echo $int."\n";
}

?>