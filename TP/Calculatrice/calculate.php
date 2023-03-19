<?php

function calculate($operation, $num1, $num2) {
    switch ($operation) {
        case '+':
            return $num1 + $num2;
        case '-':
            return $num1 - $num2;
        case '*':
            return $num1 * $num2;
        case '/':
            if ($num2 == 0) {
                return "Erreur: division par zéro";
            }
            return $num1 / $num2;
        case '%':
            if ($num2 == 0) {
                return "Erreur: division par zéro";
            }
            return $num1 % $num2;
        default:
            return "Opération non reconnue";
    }
}

echo "Bienvenue dans la calculatrice PHP !\n";
echo "Opérations disponibles: +, -, *, /, %\n";

$operation = readline("Entrez l'opération : ");
$num1 = (float)readline("Entrez le premier nombre : ");
$num2 = (float)readline("Entrez le deuxième nombre : ");

$result = calculate($operation, $num1, $num2);
echo "Résultat: $result\n";

?>
