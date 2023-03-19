<?php

$var = 42;
$var2 = 42;

/**
 * Le module est une opération spéciale, au lieu de diviser, elle va contrôler qu'elle est le reste par rapport à la division
 * Par exemple ici j'ai fait 42 modulo 42, donc 42/42, le reste est égal à 0, donc normalement, c'est censé renvoyer 0
 */
$result = $var % $var2; // Syntaxe de base modulo

echo "$result\n";

/**
 * Le modulo est utilisé par exemple lorsqu'on souhaite contrôler qu'un nombre est pair ou impair, effectivement, si le nombre est pair, alors le reste devrait être égal à 0 (X % 2), sinon c'est que le nombre est impair
 */
echo "RESTE : " . (15 % 2) . "\n"; // Le reste de la division est > 0, c'est un nombre impair
echo "RESTE : " . (16 % 2) . "\n" // Le reste de la division est = 0, c'est un nombre pair.

?>
