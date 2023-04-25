<?php

class Mammifere extends Animal {
    public function __construct(string $nom, int $age) {
        parent::__construct($nom, $age, 'mammifère');
    }

    public function faireDuBruit(): string {
        return "Le mammifère rugit.";
    }
}