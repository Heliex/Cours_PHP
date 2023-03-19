<?php
// Opérateur pour comparer si deux valeurs sont différentes (contrôle sur la valeur et le type)

$variable = 42; // int
$variable2 = "42"; // string

echo "42 != '42' ==> " . ($variable !== $variable2)."\n" ; // affiche "true/1"

$variable2 = 42;

echo "42 != 42 ==> " . ($variable !== $variable2)."\n" ; // affiche "false"

?>