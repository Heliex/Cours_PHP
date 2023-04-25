<?php

require_once 'InvalidEmailException.php';

try {
    validateEmail("invalid_email");
} catch (InvalidEmailException $e) {
    echo $e->getMessage();
} finally {
    echo "Validation de l'e-mail terminée.";
}
echo "\n";
