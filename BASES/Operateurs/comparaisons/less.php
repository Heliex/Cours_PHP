<?php
// Opérateur pour comparer sur une valeur est strictement inférieure

$variable = 40; // int
$variable2 = 42; // int

echo "40 < 42 ==> " . ($variable < $variable2)."\n" ; // affiche "true/1"

echo "42 < 40 ==> " . ($variable2 < $variable)."\n"; // affiche "false

$variable2 = 40;

echo "40 < 40 ==> " . ($variable < $variable2)."\n" ; // affiche "false"

?>