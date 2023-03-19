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

$history = [];

while (true) {
    echo "Bienvenue dans la calculatrice PHP !\n";
    echo "Opérations disponibles: +, -, *, /, %\n";
    echo "Tapez 'history' pour afficher l'historique des calculs\n";
    echo "Tapez 'exit' pour quitter le programme\n";

    $operation = readline("Entrez l'opération : ");

    if (strtolower($operation) === 'exit') {
        break;
    }

    if (strtolower($operation) === 'history') {
        echo "Historique des calculs :\n";
        foreach ($history as $entry) {
            echo $entry . "\n";
        }
        continue;
    }

    $num1 = (float)readline("Entrez le premier nombre : ");
    $num2 = (float)readline("Entrez le deuxième nombre : ");

    $result = calculate($operation, $num1, $num2);
    echo "Résultat: $result\n";

    $history[] = "{$num1} {$operation} {$num2} = {$result}";
}

?>
