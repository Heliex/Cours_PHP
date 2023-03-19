<?php

$array = ['1','2','3','4','5']; // Première possibilité d'écriture

$other_array = array('1', '2', '3', '4', '5', '6', '7', '8', '9', '10'); // Seconde possibilité d'écriture

$array_key_values = [ // Array avec association clé/valeur explicite
    "key1" => "value1",
    "key2" => "value2",
    "key3" => "value3"
];

// Attention, on n'a pas le droit d'utiliser echo pour une array, à la place, on va se servir de var_dump
var_dump($array)."\n" ;
var_dump($other_array)."\n";
var_dump($array_key_values)."\n";

/**
 * Comme pour le type string, le type array n'a pas vraiment de limite, car c'est la mémoire disponible qui va déterminer le stockage de la chaine de caractère.
 * Pour savoir la mémoire maximale qu'une array peut prendre, on peut afficher la valeur : MEMORY_LIMIT
 */

echo 'Current memory limit: ' . ini_get('memory_limit') . PHP_EOL;


?>