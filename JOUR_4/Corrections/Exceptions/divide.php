<?php

function divide($a, $b) {
    if ($b == 0) {
        throw new Exception("La division par zéro n'est pas autorisée.");
    }
    return $a / $b;
}

try {
    echo divide(10, 0);
} catch (Exception $e) {
    echo $e->getMessage();
}
echo "\n";
