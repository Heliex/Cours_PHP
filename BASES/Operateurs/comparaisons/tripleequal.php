<?php
// Opérateur pour comparer si deux valeurs sont identiques (contrôle que la valeur et le type sont identiques)

$variable = 42; // int
$variable2 = "42"; // string

echo "42 === '42' ==> " . ($variable === $variable2)."\n" ; // false

$variable2 = 42;

echo "42 === 42 ==> " . ($variable === $variable2)."\n" ; // affiche "True/1"

?>