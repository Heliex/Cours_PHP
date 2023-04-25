<?php

class InvalidEmailException extends Exception {
    public function __construct($message) {
        parent::__construct($message);
    }
}

function validateEmail($email) {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        throw new InvalidEmailException("L'adresse e-mail n'est pas valide.");
    }
    return true;
}

try {
    validateEmail("invalid_email");
} catch (InvalidEmailException $e) {
    echo $e->getMessage();
}
echo "\n";
