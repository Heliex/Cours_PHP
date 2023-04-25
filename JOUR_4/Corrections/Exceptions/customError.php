<?php

function custom_error_handler($severity, $message, $file, $line) {
    throw new ErrorException($message, $severity, $severity, $file, $line);
}

set_error_handler("custom_error_handler");

try {
    fopen("non_existent_file.txt", "r");
} catch (ErrorException $e) {
    echo "Erreur détectée : " . $e->getMessage();
    echo " dans " . $e->getFile() . " à la ligne " . $e->getLine() . "\n";
}
