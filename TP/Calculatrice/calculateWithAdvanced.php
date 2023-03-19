<?php

function calculate($operation, $num1, $num2 = null) {
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
        case 'sin':
            return sin($num1);
        case 'cos':
            return cos($num1);
        case 'tan':
            return tan($num1);
        case 'log':
            return log($num1);
        case 'exp':
            return exp($num1);
        case 'sqrt':
            return sqrt($num1);
        case 'pow':
            return pow($num1, $num2);
        case 'gcd':
            return gcd($num1, $num2);
        case 'lcm':
            return lcm($num1, $num2);
        default:
            return "Opération non reconnue";
    }
}

function gcd($a, $b) {
    while ($b != 0) {
        $t = $b;
        $b = $a % $b;
        $a = $t;
    }
    return $a;
}

function lcm($a, $b) {
    return ($a * $b) / gcd($a, $b);
}

$operations = [
    '+', '-', '*', '/', '%',
    'sin', 'cos', 'tan', 'log', 'exp', 'sqrt', 'pow', 'gcd', 'lcm'
];

echo "Bienvenue dans la calculatrice PHP !\n";
echo "Opérations disponibles: " . implode(', ', $operations) . "\n";

$operation = readline("Entrez l'opération : ");

if (!in_array($operation, $operations)) {
    echo "Opération non reconnue\n";
    exit(1);
}

$num1 = (float)readline("Entrez le premier nombre : ");

if (in_array($operation, ['add', 'subtract', 'multiply', 'divide', 'modulo', 'pow', 'gcd', 'lcm'])) {
    $num2 = (float)readline("Entrez le deuxième nombre : ");
    $result = calculate($operation, $num1, $num2);
} else {
    $result = calculate($operation, $num1);
}

echo "Résultat: $result\n";
?>
