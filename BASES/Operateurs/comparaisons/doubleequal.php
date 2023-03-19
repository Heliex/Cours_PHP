<?php
// Opérateur pour comparer si deux valeurs sont identiques (contrôle uniquement sur la valeur et non sur le type)

$variable = 42; // int
$variable2 = "42"; // string

echo "42 == '42' ==> " . ($variable == $variable2)."\n" ; // affiche "True/1"

$variable2 = 42;

echo "42 == '42' ==> " . ($variable == $variable2)."\n" ; // affiche "True/1"

?>